function getpriority() {
    let priority_task = document.getElementById('priority_task').value;
    let deadline = document.getElementById('deadline').value;


    if (priority_task === '' || deadline === '') {
        alert('Empty field!');
        return false; 
    } else {
        
        return true;
    }
}