/*jslint devel: true */

//  Declare Global Variables
var xmlhttp1 = new XMLHttpRequest();
var url1 = "prizesByYear.json";
var parsedObj1 = [];
var prizes = [];
var xmlhttp2 = new XMLHttpRequest();
var url2 = "winnersByID.json";
var parsedObj2 = [];
var laurs = [];
var choices = [];
var choices2 = [];
var choices3 = [];
var i = 0;
var j = 0;
var k = 0;

//  Declare Function to put elements from JSON file 01 in Dropdown menus
function populateDropDown() {
    var categoryList = [], yearList = [];
    for (i = 0; i < prizes.length; i++) {
        if (categoryList.includes(prizes[i].category) === false) {
            categoryList.push(prizes[i].category);
        }
        if (yearList.includes(prizes[i].year) === false) {
            yearList.push(prizes[i].year);
        }
    }
    yearList.reverse();
    categoryList.sort();
    for (i = 0; i < categoryList.length; i++) {
        categoryList[i] = categoryList[i].charAt(0).toUpperCase() + categoryList[i].slice(1);
        document.getElementById("Category").innerHTML += "<option>" + categoryList[i] + "</option>";
    }
    for (i = 0; i < yearList.length; i++) {
        document.getElementById("startyear").innerHTML += "<option>" + yearList[i] + "</option>";
        document.getElementById("endyear").innerHTML += "<option>" + yearList[i] + "</option>";
    }
    }

//  Declare function to parse first JSON file
xmlhttp1.onreadystatechange = function () {
    if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
        parsedObj1 = JSON.parse(xmlhttp1.responseText);
        prizes = parsedObj1.prizes;
        console.log(prizes);
        populateDropDown();
    }
    };

//  Call function to parse first JSON File
xmlhttp1.open("GET", url1, true);
xmlhttp1.send();

//  Declare Function to Parse Second JSON file
xmlhttp2.onreadystatechange = function () {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        parsedObj2 = JSON.parse(xmlhttp2.responseText);
        laurs = parsedObj2.laureates;
        
        // There are no cases where a laureate has won more than one prize and has more than one affiliation - checked by printing multiple prize winners to the console.log and checking
        for (i = 0; i < laurs.length; i++) {
            if (laurs[i].prizes.length > 1){
                console.log(laurs[i])
            }
        // However, there are laureates who have more than one affiliation, so it is necessary to use nested (or succesive) "for loops" to populate in those cases
            if (laurs[i].prizes[0].affiliations.length > 1){
                console.log(laurs[i])
            }
        }

        //  To match IDs from second JSON file with first JSON file and populate prizes with gender
        for (i = 0; i < prizes.length; i++) {
            for (j = 0; j < prizes[i].laureates.length; j++) {
                prizes[i].laureates[j].catgeory = prizes[i].category;
                prizes[i].laureates[j].year = prizes[i].year;
                for (k = 0; k < laurs.length; k++) {
                    if (prizes[i].laureates[j].id == laurs[k].id) {
                        prizes[i].laureates[j].gender = laurs[k].gender;
                    }
                }
            }
        }
    }
    };
console.log(laurs)
xmlhttp2.open("GET", url2, true);
xmlhttp2.send();
console.log(laurs)

//    Declare Function to implement user choices from Dropdown Menus

function apply_filters() {
    choices = [];
    var category_choice = document.getElementById("Category").value,
        startyear_choice = document.getElementById("startyear").value,
        endyear_choice = document.getElementById("endyear").value,
        form_result = document.getElementById("gender"),
        gender_choice = form_result.elements["gender"].value;
    console.log(category_choice);
    category_choice = category_choice.toLowerCase();
    console.log(category_choice);
    console.log(prizes);
                          
    // Generate a list from dropdown menu choices
    for (i = 0; i < prizes.length; i++) {
        if ((prizes[i].category.toLowerCase() == category_choice || category_choice == "all categories") && prizes[i].year >= startyear_choice && prizes[i].year <= endyear_choice) {console.log(prizes[i])
            prizes[i].category = prizes[i].category.charAt(0).toUpperCase() + prizes[i].category.slice(1);
            choices.push(prizes[i]);
        }
    }
    console.log(choices);
    // Filter choice list elements by gender into another list
    choices3 = [];
    for (i = 0; i < choices.length; i++) {
        for (j = 0; j < choices[i].laureates.length; j++) {
            if (gender_choice == "female") {
                if (choices[i].laureates[j].gender == "female") {
                    choices3.push(choices[i].laureates[j]);
                }
            } else if (gender_choice == "male") {
                if (choices[i].laureates[j].gender == "male") {
                    choices3.push(choices[i].laureates[j]);
                }
            } else {
                choices3.push(choices[i].laureates[j]);
            }
        }
    }
    choices3.reverse();
    console.log(choices3)
    if (choices3.length == 0){
        alert("Your search returned no results - please try again")
    }
    // Assign text string to create table to a variable
    var results1 = "<table class=\"table table01\" border = 1><tr><th>Year</th><th>Name</th><th>Motivation for the Award</th></tr>";
    for (i = 0; i < choices3.length; i++) {
        var year = choices3[i].year,
            name = choices3[i].firstname + " " + choices3[i].surname,
            id = choices3[i].id,
            mot = choices3[i].motivation;
        results1 += "<tr><td>" + year + "</td><td style=\"cursor:pointer\" onclick=linkfunc(" + id + ")>" + name + "</td>"
        if (mot){
            results1 += "<td>" + mot + "</td></tr>"
        }
        else {
            results1 += "<td></td></tr>"
        }
        
    }
    results1 += "</table>";
    // Create Alerts for potential errors with dropdown list selection
    if (startyear_choice > endyear_choice) {
        alert("Please choose an End Year larger than the Start Year");
    }else if (startyear_choice == 1){
        alert("Please choose a Starting Year") 
    }else if (endyear_choice == 2){
        alert("Please choose an Ending Year")
        }
    else {
        document.getElementById("part02").innerHTML = "<center><h1 class=\"mid\">Click on a Laureate's name for further information</h1><center><br>" + results1;
        }
    }

//Declare Function to display secondary table with further laureate data
function linkfunc(x) {
    // Match ID number of clicked Laureate with ID number in second JSON file
    choices2 = [];
    for (i = 0; i < laurs.length; i++) {
        if (laurs[i].id == x) {
            choices2.push(laurs[i]);
        }
    }
    // Assign text string to create second table to a variable
    console.log(choices2)
    var awards = choices2[0].prizes.length;
    var affils = choices2[0].prizes[0].affiliations.length;
    console.log(affils)
    var results2 = "<button class=\"button close\" onclick=\"closebox()\"\">Close</button><table class=\"table table02\" border = 1><tr><th colspan=4>Personal Details</th><th colspan=4>Award(s)</th><tr><tr><th>Name</th><th>Born</th><th>Died</th><th>Birthplace</th><th>Year</th><th>Category</th><th>Motivation</th><th>Affiliation</th></tr><tr><td>" + choices2[0].firstname + " " + choices2[0].surname + "</td><td>" + choices2[0].born.substring(0, 4) + "</td>" 
    // Check if the year of death has a zero value and if so leave the cell blank
    if (choices2[0].died != "0000-00-00"){
        results2 += "<td>" +choices2[0].died.substring(0, 4) + "</td>"    
    }
    else {
        results2 += "<td>&nbsp</td>"
    }
    // I have to use nested "for loops" as the first one has to iterate through more than one prize elements for multiple prize winners(there are only 4 people and 2 organisations) and the second "for loop" has to iterate through the cases where laureates have more than one affiliation. As there is no case where laureates have more than one prize AND more than one affiliation, I can handle the cell allotment with if conditions.
    results2 += "<td>" + choices2[0].bornCity + "</td>"
    for (i = 0; i < awards; i++){
            if(i==1){
                results2 += "<td></td><td></td><td></td><td></td>"
            }
            results2 += "<td>" + choices2[0].prizes[i].year + "</td><td>" + choices2[0].prizes[i].category.charAt(0).toUpperCase() + choices2[0].prizes[i].category.slice(1) + "</td>" 
            if (choices2[0].prizes[i].motivation){
                results2 += "<td>" + choices2[0].prizes[i].motivation + "</td>"
            }
            else{
                results2 += "<td>&nbsp</td>"
            }
            for (j = 0; j < affils; j++){
                if (j==1){
                    results2 += "</tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td>"
                }
                if (choices2[0].prizes[i].affiliations[j].name) {
                    results2 += "<td>" + choices2[0].prizes[i].affiliations[j].name + "</td>"
                    }
                else{
                results2 += "<td>&nbsp</td>"
                    }
            }
            results2 += "</tr>"
            }
    results2 += "</table>";
    document.getElementById("part03").innerHTML = results2;
    document.getElementById("part03").style.display = "block";
    }
// Declare Function to change display status of final popup div to none
function closebox() {
    document.getElementById("part03").style.display = "none";
}
