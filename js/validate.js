function validate() {
    const username = document.getElementById('regno').value;
    const pass = document.getElementById('password').value;
    if (username === "201900128") {
        if (pass === "ggwp") {
            document.querySelector('form').setAttribute("action", "home.html");
        }
        else
            alert("Wrong Details");
    }
    else
        alert("Wrong Details");
}