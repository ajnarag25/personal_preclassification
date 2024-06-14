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


document.getElementById('incrementRank').addEventListener('change', function() {
    const incrementRank = document.getElementById('incrementRank');
    const incrementRank2 = document.getElementById('incrementRank2');
    const incrementRank3 = document.getElementById('incrementRank3');
    const displayVal = document.getElementById('displayVal');
    const checkScore = document.getElementById('checkScores').value;
    
    const ranks = [
        'Instructor I', 'Instructor II', 'Instructor III',
        'Assistant Professor I', 'Assistant Professor II', 'Assistant Professor III', 'Assistant Professor IV',
        'Associate Professor I', 'Associate Professor II', 'Associate Professor III', 'Associate Professor IV', 'Associate Professor V',
        'Professor I', 'Professor II', 'Professor III', 'Professor IV', 'Professor V', 'Professor VI'
    ];

    const currentRank = incrementRank.value;
    const rankIndex = ranks.indexOf(currentRank);

    if (rankIndex >= 0 && rankIndex < ranks.length - 1 && currentRank !== '') {
        incrementRank2.value = ranks[rankIndex + 1];
        let nextRankIndex = rankIndex + 1 + parseInt(checkScore);
        nextRankIndex = Math.min(nextRankIndex, ranks.length - 1); // Ensure index is within bounds
        incrementRank3.value = ranks[nextRankIndex] || '';
        displayVal.value = '1';
    } else {
        incrementRank2.value = 'Instructor I';
        let nextRankIndex = 0 + parseInt(checkScore);
        incrementRank3.value = ranks[nextRankIndex] || '';
        displayVal.value = '0';
    }
});

document.getElementById('2subrank').addEventListener('change', function() {
    const chkincrementRank = document.getElementById('incrementRank3').value;
    const incrementRank4 = document.getElementById('incrementRank4');
    const ranks = [
        'Instructor I', 'Instructor II', 'Instructor III',
        'Assistant Professor I', 'Assistant Professor II', 'Assistant Professor III', 'Assistant Professor IV',
        'Associate Professor I', 'Associate Professor II', 'Associate Professor III', 'Associate Professor IV', 'Associate Professor V',
        'Professor I', 'Professor II', 'Professor III', 'Professor IV', 'Professor V', 'Professor VI'
    ];
    let nextRank = '';

    if (this.value === 'YES') {
        const currentRankIndex = ranks.indexOf(chkincrementRank);
        if (currentRankIndex >= 0 && currentRankIndex < ranks.length - 1) {
            nextRank = ranks[currentRankIndex + 1];
        }
    } else {
        nextRank = chkincrementRank;
    }

    incrementRank4.value = nextRank || '';
});


