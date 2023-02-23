// check of de verbinding met het datablad bestaat:
console.log("Onderdelen object:", onderdelenData);



// -------| MERKEN |----------------------------------------------------
// haal alle merken op, en zet in array
const allBrands = onderdelenData.map(function(el) {
    return el.Merk 
})

// check: alles in array?
console.log("merken: ", allBrands);


// Filter merken zodanig dat er 1 per merk overblijft
const allBrandsFiltered = [...new Set(allBrands.sort())]

//check: lijst met merken?
console.log("merken gefilterd: ", allBrandsFiltered)



// F U N C T I O N S ------------------------------------------------------------------

const checkZoekTermLengte = function () {
    let zoekLengte = document.getElementById('inputZoekwoord').value.length;
    console.log(zoekLengte);

    if (zoekLengte < 3) {
        zoekKnop.classList.add("uk-hidden");
     } else {
        zoekKnop.classList.remove("uk-hidden");
    }

}

const test = onderdelenData.find(function(post, index) {
    if(onderdelenData.Omschrijving == '') {
        return true;
    }
}
)






// E V E N T L I S T N E R S ------------------------------------------------------------------


zoekKnop.addEventListener('click', function () {
    console.log("knop gedrukt")
    zoekTerm = document.getElementById('inputZoekwoord').value

    console.log(zoekTerm)
    test(zoekTerm)
});

inputZoekwoord.addEventListener('keydown', function () {
    checkZoekTermLengte()
})