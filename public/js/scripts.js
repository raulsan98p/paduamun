
function toggleText() {
    if (espanol==true){
    const moreText = document.getElementById("more-text");
    const button = document.getElementById("toggle-button");

    if (moreText.classList.contains("hidden")) {
        moreText.classList.remove("hidden");
        button.textContent = "Ocultar";
    } else {
        moreText.classList.add("hidden");
        button.textContent = "Leer mas...";
    }
} 

    else {
        const moreText = document.getElementById("more-text-en");
        const button = document.getElementById("toggle-button-en");
    
        if (moreText.classList.contains("hidden")) {
            moreText.classList.remove("hidden");
            button.textContent = "Hide";
        } else {
            moreText.classList.add("hidden");
            button.textContent = "Read more...";
        }

    }
}


let espanol = true;
