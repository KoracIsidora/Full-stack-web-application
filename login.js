// Creating asynchronous request to fetch the data form the authenticate file,
// where the data is being checked in the database
async function fetchData() {
    let username = document.querySelector('#name').value;
    let password = document.querySelector('#password').value;
    const settings = {
        method: 'POST',
        headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            name: username,
            password: password
        })
    };

    let response = await fetch(`authenticate.php`, settings);
    let data = await response.json();
    return data;
}

function logIn() {
    fetchData()
        .then(data => {
            if (data.error == '') {
                window.location.assign(data.message);
            } else {
                alert(data.error);
            }
        })
}