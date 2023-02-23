const ulOutput=document.getElementById("ulOutput"),outputMerken=document.getElementById("outputMerken"),selectMerk=document.getElementById("selectMerk"),searchBox=document.getElementById("searchBox"),outputResult=document.getElementById("outputResult"),inputKnop=document.getElementById("submitButton"),scrollToHere=document.getElementById("scrollTop");let selectBoxOption="",inputString="",merkResultaat="";const allBrandsData=PartsData.map((function(e){return e.merk})),allBrands=[...new Set(allBrandsData.sort())],makeBrandSelect=function(e){makeBrandList(allBrands),e.forEach((function(e){let t=document.getElementById("selectMerk");const n=document.createElement("option");n.appendChild(document.createTextNode(""+e)),n.value=""+e,t.appendChild(n)}))},makeBrandList=function(e){e.forEach((function(e){const t=document.createElement("div");t.className="uk-text-small uk-text-center@s",t.innerHTML=""+e,document.getElementById("outputMerken").appendChild(t)}))};function changeSelect(e){selectBoxOption=e}const emptyInput=function(){document.getElementById("searchBox").value="",document.getElementById("submitButton").classList.add("uk-hidden")};function searchTerm(e){console.log("ingevoerde waarde: ",e)}function zoekOnderdeel(){document.getElementById("outputTekstblok").querySelectorAll("*").forEach((e=>e.remove()));const e=document.createElement("P");e.innerHTML=`<div>Resultaten voor: <strong>${selectBoxOption}</strong> ${inputString.toUpperCase()}</div><br><div class="uk-text-right" style="margin-top:10px"><button onClick="location.reload()" class="uk-button uk-button-primary">Opnieuw zoeken</button></div> `,document.getElementById("outputTekstblok").appendChild(e)}function filterMerk(e){return e.merk===this.merk}function startFilterMerk(e){merkResultaat=PartsData.filter(filterMerk,{merk:""+e})}function filterArtikel(e){return e.omschrijving===this.omschrijving}function startFilterArtikel(e){artikelResultaat=merkResultaat.filter((t=>t.omschrijving.includes(""+e))),makeOutputList(artikelResultaat)}function makeOutputList(e){if(e.length>0)e.forEach((function(e){let t=document.getElementById("resultList"),n=document.createElement("a");n.appendChild(document.createTextNode(`${e.merk} - ${e.omschrijving}`)),n.setAttribute("onClick",`openModal("${e.merk}", "${e.omschrijving}")`);const o=document.createElement("li");o.appendChild(n),t.appendChild(o)}));else{let e=document.getElementById("resultList");const t=document.createElement("li");t.appendChild(document.createTextNode("Geen items gevonden")),e.appendChild(t)}}function openModal(e,t){var n=`<h2>${e} onderdeel</h2>`,o=`<p>U heeft het onderdeel:<br><span class="uk-text-bold uk-text-primary">${t}</span><br> gevonden!<p>`;o+="<br>",o+=`<div><i class="fab fa-whatsapp fa-2x modal__icon-whatsapp"></i><a href="https://wa.me/31646320020?text=Hallo Bert, kunt u contact met mij opnemen over het onderdeel: ${e} ${t}.">Stel een vraag over dit onderdeel via WhatsApp</a></div>`,o+="<br>",o+='<div><i class="fas fa-mobile-alt fa-2x modal__icon-phone-intro"></i><a href="tel:0646320020">Bert bellen</a></div>',UIkit.modal.alert(`${n}${o}`)}function hideBlocks(){document.getElementById("zoekblok").classList.add("uk-hidden"),document.getElementById("reloadButton").classList.remove("uk-hidden"),document.getElementById("alertbox").classList.remove("uk-hidden")}selectMerk.addEventListener("load",makeBrandSelect(allBrands)),selectMerk.addEventListener("change",(function(e){changeSelect(e.target.value),document.getElementById("searchBox").value="",document.getElementById("submitButton").classList.add("uk-hidden"),document.getElementById("invoerveld").classList.remove("uk-hidden")})),searchBox.addEventListener("input",(function(e){if(e.target.value.length>2){inputString=e.target.value,document.getElementById("submitButton").classList.remove("uk-hidden")}})),inputKnop.addEventListener("click",(function(){scrollToHere.scrollIntoView(),document.getElementById("resultList").classList.remove("uk-hidden"),document.getElementById("h4titel").classList.add("uk-hidden"),zoekOnderdeel(),inputString=inputString.toUpperCase(),startFilterMerk(selectBoxOption),startFilterArtikel(inputString),hideBlocks()}));