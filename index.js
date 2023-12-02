let First = document.getElementById('First');
let Last = document.getElementById('Last');
let email = document.getElementById('email');
let Number = document.getElementById('Number');
let Age = document.getElementById('Age');
let country = document.getElementById('country');
let Submit = document.querySelector('.Submit');
let Submit2 = document.querySelector('.Submit2');
let erreur1 = document.querySelector('.erreur1');
let erreur2 = document.querySelector('.erreur2');
let erreur3 = document.querySelector('.erreur3');
let erreur4 = document.querySelector('.erreur4');
let erreur5 = document.querySelector('.erreur5');
let erreur6 = document.querySelector('.erreur6');
let connect = document.querySelector('connecter.php')
let inscrire = document.querySelector('inscrire.php')
    
    Submit.addEventListener('click', function (e) {
        if(!First.value) {
            erreur1.innerHTML = "section obligatoire";
            erreur1.style.color = 'red';
            First.style.background = 'red';
            e.preventDefault()
        }else{
            erreur1.innerHTML = '';
            First.style.background = 'pink';
        }
        if(!Last.value) {
            erreur2.innerHTML = "section obligatoire";
            // erreur2.innerHTML = "section obligatoire";
            erreur2.style.color = 'red';
            Last.style.background = 'red';
            e.preventDefault()
        }else{
            erreur2.innerHTML = '';
            Last.style.background = 'pink';
        }
        if(!Last.value) {
            erreur3.innerHTML = "section obligatoire";
            // erreur2.innerHTML = "section obligatoire";
            erreur3.style.color = 'red';
            hg.style.background = 'red';
            e.preventDefault()
        }else{
            erreur3.innerHTML = '';
            email.style.background = 'pink';
        }
        if(!Last.value) {
            erreur4.innerHTML = "section obligatoire";
            // erreur2.innerHTML = "section obligatoire";
            erreur4.style.color = 'red';
            Number.style.background = 'red';
            e.preventDefault()
        }else{
            erreur4.innerHTML = '';
            number.style.background = 'pink';
        }
        if(!Last.value) {
            erreur5.innerHTML = "section obligatoire";
            // erreur2.innerHTML = "section obligatoire";
            erreur5.style.color = 'red';
            Age.style.background = 'red';
            e.preventDefault()
        }else{
            erreur5.innerHTML = '';
            Age.style.background = 'pink';
        }
        if(!Last.value) {
            erreur6.innerHTML = "section obligatoire";
            // erreur2.innerHTML = "section obligatoire";
            erreur6.style.color = 'red';
            country.style.background = 'red';
            e.preventDefault()
        }else{
            erreur6.innerHTML = '';
            country.style.background = 'pink';
        }
    } if {
        erreur1.innerHTML = '';
        erreur2.innerHTML = '';
        erreur3.innerHTML = '';
        erreur4.innerHTML = '';
        erreur5.innerHTML = '';
        erreur6.innerHTML = '';
    }
     else {
                                
             });
    Submit2.addEventListener('click', function (e) {
        
    });
    
