
let shopping = document.querySelector("#shopping");
let buttonEKO150 = document.querySelector("#buttonEKO150");
let buttonSUPER300 = document.querySelector("#buttonSUPER300");
let buttonMAX700 = document.querySelector("#buttonMAX700");
let buttonrun = document.querySelector("#buttonrun");
let buttonphone = document.querySelector("#buttonphone");
let buttontv150 = document.querySelector("#buttontv150");
let buttontv300 = document.querySelector("#buttontv300");
let buttontv700 = document.querySelector("#buttontv700");
// let przycisk8 = document.querySelector("#przycisk8");
// let przycisk9 = document.querySelector("#przycisk9");



buttonEKO150.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("items");
    let tekst = document.createTextNode("EKO-150: 50zł miesięcznie + 2zł za aktywacje i instalacje");
    newItem.appendChild(tekst);
    shopping.appendChild(newItem);
    buttonEKO150.disabled=true;
    buttontv150.disabled=true;
    // alert("Dodałeś oferte EKO150 do koszyka");

});

buttonSUPER300.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("items");
    let tekst = document.createTextNode("SUPER-300: 66zł miesięcznie + 2zł za aktywacje i instalacje");
    newItem.appendChild(tekst);
    shopping.appendChild(newItem);
    buttonSUPER300.disabled=true;
    buttontv300.disabled=true;
});

buttonMAX700.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("items");
    let tekst = document.createTextNode("MAX-700: 99zł miesięcznie + 2zł za aktywacje i instalacje");
    newItem.appendChild(tekst);
    shopping.appendChild(newItem);
    buttonMAX700.disabled=true;
    buttontv700.disabled=true;
});

buttonrun.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("items");
    let tekst = document.createTextNode("Usługa telefoniczna: Opłata uruchoniemiowa 250zł");
    newItem.appendChild(tekst);
    shopping.appendChild(newItem);
    buttonrun.disabled=true;
});

buttonphone.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("items");
    let tekst = document.createTextNode("Opłata abonamentowa 10zł miesięcznie");
    newItem.appendChild(tekst);
    shopping.appendChild(newItem);
    buttonphone.disabled=true;
});

buttontv150.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("items");
    let tekst = document.createTextNode("PODSTAWOWY+EKO-150: 59zł miesięcznie + 51zł za aktywacje i instalacje");
    newItem.appendChild(tekst);
    shopping.appendChild(newItem);
    buttontv150.disabled=true;
    buttonEKO150.disabled=true;
});

buttontv300.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("items");
    let tekst = document.createTextNode("PODSTAWOWY+SUPER-300: 75zł miesięcznie + 51zł za aktywacje i instalacje ");
    newItem.appendChild(tekst);
    shopping.appendChild(newItem);
    buttontv300.disabled=true;
    buttonSUPER300.disabled=true;

});

buttontv700.addEventListener("click", function(){
    let newItem = document.createElement("p");
    newItem.classList.add("items");
    let tekst = document.createTextNode("PODSTAWOWY+MAX-700: 108zł miesięcznie + 51zł za aktywacje i instalacje ");
    newItem.appendChild(tekst);
    shopping.appendChild(newItem);
    buttontv700.disabled=true;
    buttonMAX700.disabled=true;
});


let produkty = document.getElementsByClassName("button");
let cart = document.getElementById("cart");
let ogolnacena = 0;

for(let i=0;i<produkty.length; i++) {
    produkty[i].addEventListener('click', function(){
        let cena = parseFloat(this.value) + ogolnacena;
        cart.innerHTML = `<h1>Cena: ${cena.toFixed(2)} zł</h1>`;
        ogolnacena += parseFloat(this.value);
    })
    
}

let clear = document.getElementById("clear")
    clear.addEventListener('click', function() {
    document.getElementById("shopping").innerHTML = "";
    document.getElementById("cart").innerHTML = "<h1>Cena: 0zł</h1>";
    ogolnacena = 0;
    buttonEKO150.disabled=false;
    buttontv150.disabled=false;
    buttonSUPER300.disabled=false;
    buttontv300.disabled=false;
    buttontv700.disabled=false;
    buttonMAX700.disabled=false;
    buttonphone.disabled=false;
    buttonrun.disabled=false;
});

let buy = document.getElementById("buttonbuy")

    buy.addEventListener('click', function() {
    document.getElementById("shopping").innerHTML =" <h1>Dziękuję za korzystanie z naszych usług</h1>";
    document.getElementById("cart").innerHTML = "<h1>Cena: 0zł</h1>";
    ogolnacena = 0;
    buttonEKO150.disabled=false;
    buttontv150.disabled=false;
    buttonSUPER300.disabled=false;
    buttontv300.disabled=false;
    buttontv700.disabled=false;
    buttonMAX700.disabled=false;
    buttonphone.disabled=false;
    buttonrun.disabled=false;
    
});





