'use strict';

// [START imports]
var firebase = require('firebase-admin');
// [END imports]

// [START initialize]
var serviceAccount = require("./serviceAccountKey.json");
firebase.initializeApp({
    credential: firebase.credential.cert(serviceAccount),
    databaseURL: 'https://bafanl-d5f55.firebaseio.com',
    databaseAuthVariableOverride: {
        uid: "lobster-doodle-league-admin"
    }
});
// [END initialize]

var db = firebase.database();

function createTeam(slug, name, location, conference, stadium, players) {
    db.ref("teams").child(slug).set({
        name: name,
        location: location,
        conference: conference,
        stadium: stadium,
        players: players
    });
}

function createPlayer(firstname, lastname, middlenames, birthplace,
        age, height, weight, team, number, position, seasons) {
    db.ref("players").push({
        firstname: firstname,
        lastname: lastname,
        middlenames: middlenames,
        birthplace: birthplace,
        age: age,
        height: height,
        weight: weight,
        number: number,
        position: position,
        team: team,
        seasons: seasons
    })
}

function docRefs(list) {
    var dict = {};
    list.forEach(function (item) {
        dict[item] = true;
    });
    return dict
}

createTeam('ekb-pirates', 'Pirates', 'East Kilbride', 'premier-north', 'Hamilton Rugby Club', docRefs([]));
createTeam('edi-wolves', 'Wolves', 'Edinburgh', 'premier-north', 'Meggetland Stadium',
    docRefs(['-KhoAYXLj7OBlcmziZr0', '-KhoAYXNCMDGmIFmLW9r', '-KhoAYXOJPhFK9q608t7']));

// createPlayer('Calum', 'Buchan', '', 'Edinburgh, Scotland', 32, '6\'2"', '90kg', 'edi-wolves', 1, 'TE', docRefs(["2014", "2015", "2016"]))
// createPlayer('Jamie', 'Morrison', '', 'Rinteln, Germany', 25, '6\'0"', '90kg', 'edi-wolves', 5, 'QB', docRefs(["2014", "2015", "2016"]))
// createPlayer('Murray', 'Rendall', '', 'Edinburgh, Scotland', 26, '5\'10"', '90kg', 'edi-wolves', 17, 'K', docRefs(["2014", "2015", "2016"]))

db.ref('players').orderByChild('firstname').equalTo('Jamie').on('value', function (response) {
    console.log(response.val())
});



