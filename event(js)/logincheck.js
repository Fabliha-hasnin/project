// function getInfo() {
//     let username = document.getElementById('username').value;
//     let password = document.getElementById('password').value;

//     if (username === '' || password === '') {
//         alert('Empty field!');
//      } 
     //else if (!validName(username)) {
    //     alert('Username must contain at least two words');
    //} 
//     else {
//        window.location.href = '../controller/logincheck.php';//alert('your name is : '+username); 
//     }
// }

// function validName(username) {
//     let words = username.split(' ');
//     return words.length >= 2;
// }

function getInfo() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if (username === '' || password === '') {
        alert('Empty field!');
        return false; // Prevent form submission
    } else {
        // Form validation successful, submit the form
        return true;
    }
}
