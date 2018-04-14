$(function () {
    // if variable does not exist it is created (first visit)
    localStorage.reckoning = (localStorage.reckoning || 0);

    localStorage.reckoning++; // we increase the number of visitors 

    $('#reckoning').html(localStorage.reckoning);
}); 