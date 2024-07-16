function toggleText() {
    const moreText = document.getElementById("more-text");
    const button = document.getElementById("toggle-button");

    if (moreText.classList.contains("hidden")) {
        moreText.classList.remove("hidden");
        button.textContent = "Hide";
    } else {
        moreText.classList.add("hidden");
        button.textContent = "Read more...";
    }
}
