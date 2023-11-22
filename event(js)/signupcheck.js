function getname(){

    let name = document.getElementById('name').value;

    if(name==''){

         alert('empty name!');
       
    }
    else if (!validName(name)) {
    alert('Name must contain least two words');
    }
    else{
       alert('your name is : '+name);
    }
}

function validName(name) {
    let words = name.split(' ');
    return words.length >= 2;
}