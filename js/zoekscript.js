const ulOutput = document.getElementById('ulOutput');
const outputMerken = document.getElementById('outputMerken');
const selectMerk = document.getElementById('selectMerk');

const searchBox = document.getElementById('searchBox');
const outputResult = document.getElementById('outputResult');
const inputKnop = document.getElementById('submitButton');

const scrollToHere = document.getElementById('scrollTop')

// global vars:
let selectBoxOption = "";
let inputString = "";
let merkResultaat = "";

console.log("data: ", PartsData);

// haal alle merken op, en zet in array
const allBrandsData = PartsData.map(function(el) {
    return el.merk 
})
// check: alles in array?
//console.log("merken: ", allBrandsData);


// Filter merken zodanig dat er 1 per merk overblijft
const allBrands = [...new Set(allBrandsData.sort())]
//check: lijst met merken?
//console.log("merken gefilterd: ", allBrands)

// Maak een selectbox met de merken
const makeBrandSelect = function(items) {
    //console.log("makeBrandselect aangeroepen")
    //console.log(items);
    makeBrandList(allBrands)
    items.forEach(function(merk) {
        
        let sel = document.getElementById("selectMerk");
        const option = document.createElement('option');
        option.appendChild(document.createTextNode(`${merk}`));
        option.value = `${merk}`;

        sel.appendChild(option)

    })
}

// Toon lijst van merken in column-div
const makeBrandList = function(items){
    items.forEach(function (n) {
       const parg = document.createElement('div');
       parg.className = "uk-text-small uk-text-center@s";
       parg.innerHTML = `${n}`;
        document.getElementById("outputMerken").appendChild(parg)
    })
} // makeList....

function changeSelect(inputwaarde) {
    //console.log("functie changeSelect", inputwaarde);
    // globale let vullen met selectiewaarde
    selectBoxOption = inputwaarde;
}

// inputfield schoonmaken:
const emptyInput = function () {
    document.getElementById('searchBox').value='';
    let knop = document.getElementById('submitButton');
    knop.classList.add("uk-hidden");

}

function searchTerm(inputwaarde) {
    console.log("ingevoerde waarde: ", inputwaarde)
}

function zoekOnderdeel() {
    //console.log("zoekOnderdeel aangeroepen");
    //console.log("inputstring is:", inputString);
    //console.log("het merk is: ", selectBoxOption)
    //
    // voeg tekst toe aan de outputResult div
    // eerst verwijderen alle elementen
    var node = document.getElementById('outputTekstblok');
    node.querySelectorAll('*').forEach(n => n.remove());

    const parg = document.createElement('P');
    //parg.innerHTML = `Resultaten voor: <strong>${selectBoxOption}</strong> ${inputString.toUpperCase()}`
    parg.innerHTML = `<div>Resultaten voor: <strong>${selectBoxOption}</strong> ${inputString.toUpperCase()}</div><br><div class="uk-text-right" style="margin-top:10px"><button onClick="location.reload()" class="uk-button uk-button-primary">Opnieuw zoeken</button></div> `;
    document.getElementById("outputTekstblok").appendChild(parg)
}


// --- filter functies
function filterMerk(obj) {
    return obj.merk === this.merk
}
function startFilterMerk(input) {
    //console.log(PartsData.filter(filterMerk, {merk: `${input}`}) );
    merkResultaat = PartsData.filter(filterMerk, {merk: `${input}`}) ;
}

function filterAfbeelding(obj) {
    return obj.afbeelding === this.afbeelding
}

function filterCategorie(obj) {
    return obj.categorie ===- this.categorie
}

// --- eind filter functie MERK

// --- filter functie ARTIKEL uit de
function filterArtikel(obj) {
    return obj.omschrijving === this.omschrijving

}
function startFilterArtikel(input) {
    //console.log(merkResultaat.filter(filterArtikel, {omschrijving: `${input}`}) );
    //console.log("resultaat: ", merkResultaat.filter(x => x.omschrijving.includes(`${input}`)));
    
    artikelResultaat = merkResultaat.filter(x => x.omschrijving.includes(`${input}`)) ;
    makeOutputList(artikelResultaat)
}
// --- eind filter functie ARTIKEL

// Maak de lijst in de weergave:
function makeOutputList(items) {

    if(items.length > 0 ) {
    items.forEach(function(item) {
        let li = document.getElementById("resultList");
        
        let a = document.createElement('a');
        a.appendChild(document.createTextNode(`${item.merk} - ${item.omschrijving}`))
        //a.setAttribute('href', `https://wa.me/31646320020?text=Ik heb een vraag over: ${item.merk} ${item.omschrijving}`);
        //a.setAttribute('uk-toggle', 'target: #artikeldata');
        a.setAttribute('onClick', `openModal("${item.merk}", "${item.omschrijving}", "${item.afbeelding}")`)
        const litem = document.createElement('li');
        //litem.setAttribute('titel', `${item.omschrijving}`);
        //litem.setAttribute('merk', `${item.merk}`)
        litem.appendChild(a)
        li.appendChild(litem)

        //let litem = document.createElement('li');
        //litem.texContent = `${item.merk} ${item.omschrijving}`;
        //li.append(litem);
    })
    } else {
        let li = document.getElementById("resultList");
        const litem = document.createElement('li');
        litem.appendChild(document.createTextNode(`Geen items gevonden`))
        li.appendChild(litem)
    }   

}

function openModal(merk, omschrijving, afbeelding){ 
    var titel = `<h2>${merk} onderdeel</h2>`;
    var text = `<p>U heeft het onderdeel:<br><span class="uk-text-bold uk-text-primary">${omschrijving}</span><br> gevonden!<p>`;
    text += `<image src="${afbeelding}" width=100% />`;
    text += '<br>';
    text += `<div><i class="fab fa-whatsapp fa-2x modal__icon-whatsapp"></i><a href="https://wa.me/31646320020?text=Hallo Bert, kunt u contact met mij opnemen over het onderdeel: ${merk} ${omschrijving}.">Stel een vraag over dit onderdeel via WhatsApp</a></div>`;
    text += '<br>';
    text += '<div><i class="fas fa-mobile-alt fa-2x modal__icon-phone-intro"></i><a href="tel:0646320020">Bert bellen</a></div>';
    UIkit.modal.alert(`${titel}${text}`)
}

function hideBlocks() {
    let block = document.getElementById('zoekblok');
    block.classList.add("uk-hidden");

    let reloadknop = document.getElementById('reloadButton');
    reloadknop.classList.remove("uk-hidden");

    let alertbox = document.getElementById('alertbox');
    alertbox.classList.remove("uk-hidden");

}

// EVENTLISTNERS ------------------------------------------------------------------

// Bij laden pagina de selectielijst met merken maken:
selectMerk.addEventListener('load', makeBrandSelect(allBrands));

// Bij wijzigen van de selectbox:
// - functie changeSelect om keuze op te slaan
// - emptyInput bij wijzigen van select, wanneer er al een select is gemaakt
selectMerk.addEventListener('change', function(e) {
    changeSelect(e.target.value);
    emptyInput();
    let invoerveld = document.getElementById('invoerveld');
    invoerveld.classList.remove("uk-hidden");
});

//inputfield met zoekterm: opslaan ingevoerde term
searchBox.addEventListener('input', function(e) {
    if(e.target.value.length > 2) {
        inputString = e.target.value;
        
        // verwijder hidden status van de knop:
        let knop = document.getElementById('submitButton');
        knop.classList.remove("uk-hidden")
        
    }
});

// submitbutton
inputKnop.addEventListener('click', function () {
    //console.log("geklikt op de knop")
    //console.log(selectBoxOption)
    //console.log(inputString)

    scrollToHere.scrollIntoView();

    // verwijder de hidden status van de resultList
    let list = document.getElementById('resultList');
    list.classList.remove("uk-hidden")

    let h4titel = document.getElementById('h4titel');
    h4titel.classList.add("uk-hidden");

    // start functie voor het zoekresultaat


    zoekOnderdeel();
    //console.log(selectBoxOption);
    inputString = inputString.toUpperCase();

    //console.log(inputString);

    startFilterMerk(selectBoxOption);
    startFilterArtikel(inputString);

    
    hideBlocks();
    //showAlertbox();
    //console.log(artikelResultaat)

})




