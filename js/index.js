async function Post(url, dataString)
{
    return response = await fetch(url, {
        method: 'POST',
        cache: 'no-cache',
        credentials: 'same-origin',
        body: dataString
    })
}

async function Get(url)
{
    return response = await fetch(url);
}


async function BuildCards()
{
    return response = await Get("./router.php?resource=cards")
        .then(res => res.json())
        .then(data => {
            let elementToAppend = document.getElementById("cards");

            for (let i = 0; i < data.cardArray.length; i++){
                let card = document.createElement('div');
                card.classList += "col";
                card.innerHTML += "<div class='card shadow-sm'><div class='card-body d-flex flex-column justify-content-end' style='color: white; background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9)), url(/assets/" + data.cardArray[i].imgStr + ");'><h4 class='card-title font-weight-semibold'>" + data.cardArray[i].name + "</h4><p class='card-text'>" + data.cardArray[i].description + "</p></div>";
                elementToAppend.appendChild(card);
            }
        });
}


// This function runs when HomeView.php has finished loading
document.addEventListener("DOMContentLoaded", () => {
    BuildCards();
});
