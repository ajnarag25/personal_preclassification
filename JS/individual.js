const ranks = [
    "Instructor I",
    "Instructor II",
    "Instructor III",
    "Assistant Professor I",
    "Assistant Professor II",
    "Assistant Professor III",
    "Assistant Professor IV",
    "Associate Professor I",
    "Associate Professor II",
    "Associate Professor III",
    "Associate Professor IV",
    "Associate Professor V",
    "Professor I",
    "Professor II",
    "Professor III",
    "Professor IV",
    "Professor V",
    "Professor VI"
];

document.getElementById('1subrank').addEventListener('change', function() {
    const incrementRank = document.getElementById('incrementRank');
    const incrementRank2 = document.getElementById('incrementRank2');
    const incrementRank3 = document.getElementById('incrementRank3');
    const displayVal = document.getElementById('displayVal');
    const checkScore = document.getElementById('checkScores');
    const currentRank = incrementRank.value;
    const rankIndex = ranks.indexOf(currentRank);

    console.log('test1');
    if (this.value === 'YES' && rankIndex < ranks.length - 1) {
        incrementRank.value = 'Instructor II';
        incrementRank2.value = 'Instructor III';
        if(checkScore.value == '1'){
            incrementRank3.value = 'Assistant Professor I';
        }else if(checkScore.value == '2'){
            incrementRank3.value = 'Assistant Professor II';
        }else if(checkScore.value == '3'){
            incrementRank3.value = 'Assistant Professor III';
        }else if(checkScore.value == '4'){
            incrementRank3.value = 'Assistant Professor IV';
        }else if(checkScore.value == '5'){
            incrementRank3.value = 'Associate Professor I';
        }else if(checkScore.value == '6'){
            incrementRank3.value = 'Associate Professor II';
        }
        displayVal.value = '1';
    } else {
        incrementRank.value = 'Instructor I';
        incrementRank2.value = 'Instructor I';
        if(checkScore.value == '1'){
            incrementRank3.value = 'Instructor II';
        }else if(checkScore.value == '2'){
            incrementRank3.value = 'Instructor III';
        }else if(checkScore.value == '3'){
            incrementRank3.value = 'Assistant Professor I';
        }else if(checkScore.value == '4'){
            incrementRank3.value = 'Assistant Professor II';
        }else if(checkScore.value == '5'){
            incrementRank3.value = 'Assistant Professor III';
        }else if(checkScore.value == '6'){
            incrementRank3.value = 'Assistant Professor IV';
        }
        displayVal.value = '0';
    }
});

document.getElementById('2subrank').addEventListener('change', function() {
    console.log('test2');
    const chkincrementRank = document.getElementById('incrementRank3');
    const incrementRank4 = document.getElementById('incrementRank4');
    if (this.value === 'YES') {
        if(chkincrementRank.value == 'Assistant Professor I'){
            incrementRank4.value = 'Assistant Professor II';
        }else if(chkincrementRank.value == 'Assistant Professor II'){
            incrementRank4.value = 'Assistant Professor III';
        }else if(chkincrementRank.value == 'Assistant Professor III'){
            incrementRank4.value = 'Assistant Professor IV';
        }else if(chkincrementRank.value == 'Assistant Professor IV'){
            incrementRank4.value = 'Associate Professor I';
        }else if(chkincrementRank.value == 'Associate Professor I'){
            incrementRank4.value = 'Associate Professor II';
        }else if(chkincrementRank.value == 'Associate Professor II'){
            incrementRank4.value = 'Associate Professor III';
        }
        
        else if(chkincrementRank.value == 'Instructor II'){
            incrementRank4.value = 'Instructor III';
        }else if(chkincrementRank.value == 'Instructor III'){
            incrementRank4.value = 'Assistant Professor I';
        }else if(chkincrementRank.value == 'Assistant Professor I'){
            incrementRank4.value = 'Assistant Professor II';
        }else if(chkincrementRank.value == 'Assistant Professor II'){
            incrementRank4.value = 'Assistant Professor III';
        }else if(chkincrementRank.value == 'Assistant Professor III'){
            incrementRank4.value = 'Assistant Professor IV';
        }else if(chkincrementRank.value == 'Assistant Professor IV'){
            incrementRank4.value = 'Associate Professor I';
        }
    } else {
        incrementRank4.value = chkincrementRank.value;
    }
});

