
let zakupki = document.querySelector("#zakupki");
let przycisk = document.querySelector("#przycisk");
let przycisk1 = document.querySelector("#przycisk1");
let przycisk2 = document.querySelector("#przycisk2");
let przycisk3 = document.querySelector("#przycisk3");
let przycisk4 = document.querySelector("#przycisk4");
let przycisk5 = document.querySelector("#przycisk5");
let przycisk6 = document.querySelector("#przycisk6");
let przycisk7 = document.querySelector("#przycisk7");
let przycisk8 = document.querySelector("#przycisk8");
let przycisk9 = document.querySelector("#przycisk9");

przycisk.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("zakupy");
    let tekst = document.createTextNode("EKO-150: 50zł miesięcznie + 2zł za aktywacje i instalacje");
    newItem.appendChild(tekst);
    zakupki.appendChild(newItem);
});

przycisk1.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("zakupy");
    let tekst = document.createTextNode("SUPER-300: 66zł miesięcznie + 2zł za aktywacje i instalacje");
    newItem.appendChild(tekst);
    zakupki.appendChild(newItem);
});

przycisk2.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("zakupy");
    let tekst = document.createTextNode("MAX-700: 99zł miesięcznie + 2zł za aktywacje i instalacje");
    newItem.appendChild(tekst);
    zakupki.appendChild(newItem);
});

przycisk3.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("zakupy");
    let tekst = document.createTextNode("Usługa telefoniczna: Opłata uruchoniemiowa 250zł");
    newItem.appendChild(tekst);
    zakupki.appendChild(newItem);
});

przycisk4.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("zakupy");
    let tekst = document.createTextNode("Opłata abonamentowa 10zł miesięcznie");
    newItem.appendChild(tekst);
    zakupki.appendChild(newItem);
});

przycisk5.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("zakupy");
    let tekst = document.createTextNode("PODSTAWOWY+EKO-150: 59zł miesięcznie + 51zł za aktywacje i instalacje");
    newItem.appendChild(tekst);
    zakupki.appendChild(newItem);
});

przycisk6.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("zakupy");
    let tekst = document.createTextNode("PODSTAWOWY+SUPER-300: 75zł miesięcznie + 51zł za aktywacje i instalacje ");
    newItem.appendChild(tekst);
    zakupki.appendChild(newItem);
});

przycisk7.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("zakupy");
    let tekst = document.createTextNode("PODSTAWOWY+MAX-700: 108zł miesięcznie + 51zł za aktywacje i instalacje ");
    newItem.appendChild(tekst);
    zakupki.appendChild(newItem);
});


let produkty = document.getElementsByClassName("przycisk");
let koszyk = document.getElementById("koszyk");
let ogolnacena = 0;

for(let i=0;i<produkty.length; i++) {
    produkty[i].addEventListener('click', function(){
        let cena = parseFloat(this.value) + ogolnacena;
        koszyk.innerHTML = `<h1>Cena: ${cena.toFixed(2)} zł</h1>`;
        ogolnacena += parseFloat(this.value);
    })
    
}

let usun = document.getElementById("buttonn")
    usun.addEventListener('click', function() {
    document.getElementById("zakupki").innerHTML = "";
    document.getElementById("koszyk").innerHTML = "<h1>Cena: 0zł</h1>";
    ogolnacena = 0;
});

let kup = document.getElementById("buton")

    kup.addEventListener('click', function() {
    document.getElementById("zakupki").innerHTML =" <h1>Dziękuję za korzystanie z naszych usług</h1>";
    document.getElementById("koszyk").innerHTML = "<h1>Cena: 0zł</h1>";
    ogolnacena = 0;
});

