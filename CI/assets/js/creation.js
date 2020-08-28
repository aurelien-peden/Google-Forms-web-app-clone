var test=0;
var nbQuestion=0;
function ajouterQuestionChamp() {
    test++;
    var myid=test;
    nbQuestion++;
    var rowQuestion = document.createElement("div");
    rowQuestion.className = "row";

    var title = document.createElement("h5");
    title.innerHTML="Champ de texte";
    rowQuestion.appendChild(title);

    var hidden=document.createElement('input');
    hidden.setAttribute("type","hidden");
    hidden.setAttribute("name","question["+myid+"][type]");
    hidden.setAttribute("value","text");
    rowQuestion.appendChild(hidden);


    var question = document.createElement('INPUT');
    question.setAttribute("type", "text");
    question.setAttribute("required","true");
    question.setAttribute("name","question["+myid+"][question]");
    question.placeholder = "Question";
    rowQuestion.appendChild(question);


    var champ = document.createElement('INPUT');
    champ.setAttribute("type", "text");
    champ.setAttribute("required","true");
    champ.setAttribute("name","question["+myid+"][placeholder]");
    champ.placeholder = 'Choisir un placeholder';
    rowQuestion.appendChild(champ);

    var div= document.createElement("div");
    div.className= "input-field col s12";

    var icone = document.createElement("i");
    icone.className= "material-icons prefix";
    icone.innerHTML="help";
    div.appendChild(icone);

    var aide = document.createElement('INPUT');
    aide.setAttribute("type", "text");
    aide.setAttribute("name","question["+myid+"][aide]");
    aide.placeholder = "Donnez une indication (optionnel)";
    div.appendChild(aide);
    rowQuestion.appendChild(div);


    var label=document.createElement('label');
    var checkbox=document.createElement('input');
    checkbox.setAttribute("type","checkbox");
    checkbox.setAttribute("name","question["+myid+"][requis]");
    checkbox.setAttribute("checked","checked");
    checkbox.setAttribute("value","oui");
    checkbox.className="filled-in";
    label.appendChild(checkbox);
    var span=document.createElement("span");
    span.innerHTML="Requis";
    label.appendChild(span);
    rowQuestion.appendChild(label);

    var boutonRetirer = document.createElement('a');
    boutonRetirer.className = "right waves-effect waves-light btn-small red darken-1";
    boutonRetirer.text = "x";
    boutonRetirer.title="Supprimer la question.";
    boutonRetirer.id = "boutonRetirer";
    boutonRetirer.onclick = function() {
        retirer(this);
        nbQuestion--;
    }

    rowQuestion.appendChild(boutonRetirer);

    document.getElementById('form').appendChild(rowQuestion);
}

function mysubmit(){
    if(nbQuestion==0){
        alert("Il faut au moins une question !");
        return false;
    }
    var hidden=document.createElement('input');
    hidden.setAttribute("type","hidden");
    hidden.setAttribute("name","hidden");
    hidden.setAttribute("value",nbQuestion);
    document.getElementById('form').appendChild(hidden);
}



function ajouterQuestionZoneTexte() {
    test++;
    var myid=test;
    nbQuestion++;
    var rowQuestion = document.createElement("div");
    rowQuestion.className = "row";

    var title = document.createElement("h5");
    title.innerHTML="Zone de texte";
    rowQuestion.appendChild(title);

    var hidden=document.createElement('input');
    hidden.setAttribute("type","hidden");
    hidden.setAttribute("name","question["+myid+"][type]");
    hidden.setAttribute("value","textarea");
    rowQuestion.appendChild(hidden);


    var question = document.createElement('INPUT');
    question.setAttribute("type", "text");
    question.setAttribute("required","true");
    question.setAttribute("name","question["+myid+"][question]");
    question.placeholder = "Question";
    rowQuestion.appendChild(question);


    var champ = document.createElement('INPUT');
    champ.setAttribute("type", "text");
    champ.setAttribute("required","true");
    champ.setAttribute("name","question["+myid+"][placeholder]");
    champ.placeholder = 'Choisir un placeholder';
    rowQuestion.appendChild(champ);

    var div= document.createElement("div");
    div.className= "input-field col s12";

    var icone = document.createElement("i");
    icone.className= "material-icons prefix";
    icone.innerHTML="help";
    div.appendChild(icone);

    var aide = document.createElement('INPUT');
    aide.setAttribute("type", "text");
    aide.setAttribute("name","question["+myid+"][aide]");
    aide.placeholder = "Donnez une indication (optionnel)";
    div.appendChild(aide);
    rowQuestion.appendChild(div);


    var label=document.createElement('label');
    var checkbox=document.createElement('input');
    checkbox.setAttribute("type","checkbox");
    checkbox.setAttribute("name","question["+myid+"][requis]");
    checkbox.setAttribute("checked","checked");
    checkbox.setAttribute("value","oui");
    checkbox.className="filled-in";
    label.appendChild(checkbox);
    var span=document.createElement("span");
    span.innerHTML="Requis";
    label.appendChild(span);
    rowQuestion.appendChild(label);

    var boutonRetirer = document.createElement('a');
    boutonRetirer.className = "right waves-effect waves-light btn-small red darken-1";
    boutonRetirer.text = "x";
    boutonRetirer.title="Supprimer la question.";
    boutonRetirer.id = "boutonRetirer";
    boutonRetirer.onclick = function() {
        retirer(this);
        nbQuestion--;
    }

    rowQuestion.appendChild(boutonRetirer);

    document.getElementById('form').appendChild(rowQuestion);
}

function ajouterQuestionCheckbox() {
    test++;
    var myid=test;
    nbQuestion++;
    var nbCheckboxes={int: 1};
    var questionCheckbox = document.createElement("div");
    questionCheckbox.className = "row";

    var title = document.createElement("h5");
    title.innerHTML="Checkboxes";
    questionCheckbox.appendChild(title);

    var hidden=document.createElement('input');
    hidden.setAttribute("type","hidden");
    hidden.setAttribute("name","question["+myid+"][nbCheckbox]");
    hidden.setAttribute("value",nbCheckboxes.int);
    questionCheckbox.appendChild(hidden);



    var hidden2=document.createElement('input');
    hidden2.setAttribute("type","hidden");
    hidden2.setAttribute("name","question["+myid+"][type]");
    hidden2.setAttribute("value","checkbox");
    questionCheckbox.appendChild(hidden2);

    var question = document.createElement('INPUT');
    question.setAttribute("type", "text");
    question.setAttribute("required","true");
    question.setAttribute("name","question["+myid+"][question]");
    question.placeholder = "Question";
    question.className =  "input-field col s10";

    var boutonRetirer = document.createElement('a');
    boutonRetirer.className = "waves-effect waves-light btn-small red darken-1 input-field col s2";
    boutonRetirer.text = "x";
    boutonRetirer.id = "boutonRetirer";
    boutonRetirer.title="Supprimer la question.";
    boutonRetirer.onclick = function() {
        retirer(this);
        nbQuestion--;
    }

    var rowCheckbox = document.createElement('div');
    rowCheckbox.className = "row";
    var div= document.createElement("div");
    div.className= "col s12";

    var label=document.createElement('label');
    var checkbox=document.createElement('input');
    checkbox.setAttribute("type","checkbox");
    checkbox.className="filled-in";
    label.appendChild(checkbox);
    var span=document.createElement("span");
    span.innerHTML="";
    label.appendChild(span);
    div.appendChild(label);

    var text = document.createElement("input");
    text.setAttribute("type", "text");
    text.setAttribute("required", "true");
    text.setAttribute("name", "question["+myid+"][checkbox][]");
    text.placeholder = "Choisir un texte pour la checkbox";
    div.appendChild(text);
    rowCheckbox.appendChild(div);

    var boutonAjouter = document.createElement('a');
    boutonAjouter.className = "waves-effect waves-light btn-small blue darken-1";
    boutonAjouter.text = "+";
    boutonAjouter.id = "boutonAjouter";
    boutonAjouter.title="Ajouter une checkbox";
    boutonAjouter.onclick = function() {
        nbCheckboxes.int++;
        hidden.setAttribute("value",nbCheckboxes.int);
        ajouterCheckbox(rowCheckbox,hidden,nbCheckboxes,myid);
    }

    var div2= document.createElement("div");
    div2.className= "input-field col s12";

    var icone = document.createElement("i");
    icone.className= "material-icons prefix";
    icone.innerHTML="help";
    div2.appendChild(icone);

    var aide = document.createElement('INPUT');
    aide.setAttribute("type", "text");
    aide.setAttribute("name","question["+myid+"][aide]");
    aide.placeholder = "Donnez une indication (optionnel)";
    div2.appendChild(aide);

    var label2=document.createElement('label');
    label2.className= "input-field col s12";
    var checkbox2=document.createElement('input');
    checkbox2.setAttribute("type","checkbox");
    checkbox2.setAttribute("name","question["+myid+"][requis]");
    checkbox2.setAttribute("checked","checked");
    checkbox2.setAttribute("value","oui");
    checkbox2.className="filled-in";
    label2.appendChild(checkbox2);
    var span2=document.createElement("span");
    span2.innerHTML="Requis";
    label2.appendChild(span2);

    
    questionCheckbox.appendChild(question);
    questionCheckbox.appendChild(boutonRetirer);
    questionCheckbox.appendChild(rowCheckbox);
    questionCheckbox.appendChild(boutonAjouter);
    questionCheckbox.appendChild(div2);
    questionCheckbox.appendChild(label2);

    document.getElementById("form").appendChild(questionCheckbox);

}

function ajouterCheckbox(element,hidden,nbCheckboxes,myid) {
    var divCheckbox = document.createElement('div');

    var rowCheckbox = document.createElement('div');

    var div= document.createElement("div");
    div.className= "col s12";

    var label=document.createElement('label');
    var checkbox=document.createElement('input');
    checkbox.setAttribute("type","checkbox");
    checkbox.setAttribute("name","");
    checkbox.setAttribute("value","");
    checkbox.className="filled-in";
    label.appendChild(checkbox);
    var span=document.createElement("span");
    span.innerHTML="";
    label.appendChild(span);
    div.appendChild(label);

    var text = document.createElement("input");
    text.setAttribute("type", "text");
    text.setAttribute("name","question["+myid+"][checkbox][]");
    text.placeholder = "Choisir un texte pour la checkbox";
    text.setAttribute("required","true");
    div.appendChild(text);
    rowCheckbox.appendChild(div);



    var boutonRetirer = document.createElement('a');
    boutonRetirer.className = "waves-effect waves-light btn-small red darken-1 right";
    boutonRetirer.text = "x";
    boutonRetirer.id = "boutonRetirer";
    boutonRetirer.title= "Retirer la checkbox";
    boutonRetirer.onclick = function() {
        retirer(this);
        nbCheckboxes.int--;
        hidden.setAttribute("value",nbCheckboxes.int);
    }

    var balisep=document.createElement("p");
    balisep.innerHTML="<br>";

    divCheckbox.appendChild(rowCheckbox);
    divCheckbox.appendChild(boutonRetirer);

    element.appendChild(balisep);
    element.appendChild(divCheckbox);
}

function retirer(element) {
    element.parentNode.parentNode.removeChild(element.parentNode);
}

function ajouterQuestionDate(){
    test++;
    var myid=test;
    nbQuestion++;
    var rowQuestion = document.createElement("div");
    rowQuestion.className = "row";

    var title = document.createElement("h5");
    title.innerHTML="Date";
    rowQuestion.appendChild(title);

    var hidden=document.createElement('input');
    hidden.setAttribute("type","hidden");
    hidden.setAttribute("name","question["+myid+"][type]");
    hidden.setAttribute("value","date");
    rowQuestion.appendChild(hidden);


    var question = document.createElement('INPUT');
    question.setAttribute("type", "text");
    question.setAttribute("required","true");
    question.setAttribute("name","question["+myid+"][question]");
    question.placeholder = "Question";
    rowQuestion.appendChild(question);


    var champ = document.createElement('INPUT');
    champ.setAttribute("type", "date");
    champ.setAttribute("disabled", "true");
    rowQuestion.appendChild(champ);

    var div= document.createElement("div");
    div.className= "input-field col s12";

    var icone = document.createElement("i");
    icone.className= "material-icons prefix";
    icone.innerHTML="help";
    div.appendChild(icone);

    var aide = document.createElement('INPUT');
    aide.setAttribute("type", "text");
    aide.setAttribute("name","question["+myid+"][aide]");
    aide.placeholder = "Donnez une indication (optionnel)";
    div.appendChild(aide);
    rowQuestion.appendChild(div);


    var label=document.createElement('label');
    var checkbox=document.createElement('input');
    checkbox.setAttribute("type","checkbox");
    checkbox.setAttribute("name","question["+myid+"][requis]");
    checkbox.setAttribute("checked","checked");
    checkbox.setAttribute("value","oui");
    checkbox.className="filled-in";
    label.appendChild(checkbox);
    var span=document.createElement("span");
    span.innerHTML="Requis";
    label.appendChild(span);
    rowQuestion.appendChild(label);

    var boutonRetirer = document.createElement('a');
    boutonRetirer.className = "right waves-effect waves-light btn-small red darken-1";
    boutonRetirer.text = "x";
    boutonRetirer.title="Supprimer la question.";
    boutonRetirer.id = "boutonRetirer";
    boutonRetirer.onclick = function() {
        retirer(this);
        nbQuestion--;
    }

    rowQuestion.appendChild(boutonRetirer);

    document.getElementById('form').appendChild(rowQuestion);
}
function ajouterListe(){
    test++;
    var myid=test;
    nbQuestion++;
    var nbOption= {int:1};
    var questionListe = document.createElement("div");
    questionListe.className = "row";

    var title = document.createElement("h5");
    title.innerHTML="Liste déroulante";
    questionListe.appendChild(title);

    var hidden=document.createElement('input');
    hidden.setAttribute("type","hidden");
    hidden.setAttribute("name","question["+myid+"][nbOption]");
    hidden.setAttribute("value",nbOption.int);
    questionListe.appendChild(hidden);



    var hidden2=document.createElement('input');
    hidden2.setAttribute("type","hidden");
    hidden2.setAttribute("name","question["+myid+"][type]");
    hidden2.setAttribute("value","liste");
    questionListe.appendChild(hidden2);

    var question = document.createElement('INPUT');
    question.setAttribute("type", "text");
    question.setAttribute("required","true");
    question.setAttribute("name","question["+myid+"][question]");
    question.placeholder = "Question";
    question.className =  "input-field col s10";

    var boutonRetirer = document.createElement('a');
    boutonRetirer.className = "waves-effect waves-light btn-small red darken-1 input-field col s2";
    boutonRetirer.text = "x";
    boutonRetirer.id = "boutonRetirer";
    boutonRetirer.title="Supprimer la question.";
    boutonRetirer.onclick = function() {
        retirer(this);
        nbQuestion--;
    }

    var rowCheckbox = document.createElement('div');
    rowCheckbox.className = "row";
    var div= document.createElement("div");
    div.className= "col s12";

    var text = document.createElement("input");
    text.setAttribute("type", "text");
    text.setAttribute("required", "true");
    text.setAttribute("name", "question["+myid+"][option][]");
    text.placeholder = "Choisir un texte pour l'option";
    div.appendChild(text);
    rowCheckbox.appendChild(div);

    var boutonAjouter = document.createElement('a');
    boutonAjouter.className = "waves-effect waves-light btn-small blue darken-1";
    boutonAjouter.text = "+";
    boutonAjouter.id = "boutonAjouter";
    boutonAjouter.title="Ajouter une option";
    boutonAjouter.onclick = function() {
        nbOption.int++;
        hidden.setAttribute("value",nbOption.int);
        ajouterOption(rowCheckbox,hidden,nbOption,myid);
    }

    var div2= document.createElement("div");
    div2.className= "input-field col s12";

    var icone = document.createElement("i");
    icone.className= "material-icons prefix";
    icone.innerHTML="help";
    div2.appendChild(icone);

    var aide = document.createElement('INPUT');
    aide.setAttribute("type", "text");
    aide.setAttribute("name","question["+myid+"][aide]");
    aide.placeholder = "Donnez une indication (optionnel)";
    div2.appendChild(aide);

    var label2=document.createElement('label');
    label2.className= "input-field col s12";
    var checkbox2=document.createElement('input');
    checkbox2.setAttribute("type","checkbox");
    checkbox2.setAttribute("name","question["+myid+"][requis]");
    checkbox2.setAttribute("checked","checked");
    checkbox2.setAttribute("value","oui");
    checkbox2.className="filled-in";
    label2.appendChild(checkbox2);
    var span2=document.createElement("span");
    span2.innerHTML="Requis";
    label2.appendChild(span2);

    
    questionListe.appendChild(question);
    questionListe.appendChild(boutonRetirer);
    questionListe.appendChild(rowCheckbox);
    questionListe.appendChild(boutonAjouter);
    questionListe.appendChild(div2);
    questionListe.appendChild(label2);

    document.getElementById("form").appendChild(questionListe);
} 
function ajouterOption(element,hidden,nbOption,myid) {
    var divCheckbox = document.createElement('div');

    var rowCheckbox = document.createElement('div');

    var div= document.createElement("div");
    div.className= "col s12";


    var text = document.createElement("input");
    text.setAttribute("type", "text");
    text.setAttribute("name","question["+myid+"][option][]");
    text.placeholder = "Choisir un texte pour l'option";
    text.setAttribute("required","true");
    div.appendChild(text);
    rowCheckbox.appendChild(div);



    var boutonRetirer = document.createElement('a');
    boutonRetirer.className = "waves-effect waves-light btn-small red darken-1 right";
    boutonRetirer.text = "x";
    boutonRetirer.id = "boutonRetirer";
    boutonRetirer.title= "Retirer la checkbox";
    boutonRetirer.onclick = function() {
        retirer(this);
        nbOption.int--;
        hidden.setAttribute("value",nbOption.int);
    }

    var balisep=document.createElement("p");
    balisep.innerHTML="<br>";

    divCheckbox.appendChild(rowCheckbox);
    divCheckbox.appendChild(boutonRetirer);

    element.appendChild(balisep);
    element.appendChild(divCheckbox);
}
function ajouterQuestionRadio(){
    test++;
    var myid=test;
    nbQuestion++;
    var nbRadio= { int: 1 };
    var questionCheckbox = document.createElement("div");
    questionCheckbox.className = "row";

    var title = document.createElement("h5");
    title.innerHTML="Boutons radio";
    questionCheckbox.appendChild(title);

    var hidden=document.createElement('input');
    hidden.setAttribute("type","hidden");
    hidden.setAttribute("name","question["+myid+"][nbRadio]");
    hidden.setAttribute("value",nbRadio.int);
    questionCheckbox.appendChild(hidden);



    var hidden2=document.createElement('input');
    hidden2.setAttribute("type","hidden");
    hidden2.setAttribute("name","question["+myid+"][type]");
    hidden2.setAttribute("value","radio");
    questionCheckbox.appendChild(hidden2);

    var question = document.createElement('INPUT');
    question.setAttribute("type", "text");
    question.setAttribute("required","true");
    question.setAttribute("name","question["+myid+"][question]");
    question.placeholder = "Question";
    question.className =  "input-field col s10";

    var boutonRetirer = document.createElement('a');
    boutonRetirer.className = "waves-effect waves-light btn-small red darken-1 input-field col s2";
    boutonRetirer.text = "x";
    boutonRetirer.id = "boutonRetirer";
    boutonRetirer.title="Supprimer la question.";
    boutonRetirer.onclick = function() {
        retirer(this);
        nbQuestion--;
    }

    var rowCheckbox = document.createElement('div');
    rowCheckbox.className = "row";
    var div= document.createElement("div");
    div.className= "col s12";

    var label=document.createElement('label');
    var checkbox=document.createElement('input');
    checkbox.setAttribute("type","radio");
    checkbox.setAttribute("name","radio"+myid);
    checkbox.className="filled-in";
    label.appendChild(checkbox);
    var span=document.createElement("span");
    span.innerHTML="";
    label.appendChild(span);
    div.appendChild(label);

    var text = document.createElement("input");
    text.setAttribute("type", "text");
    text.setAttribute("required", "true");
    text.setAttribute("name", "question["+myid+"][radio][]");
    text.placeholder = "Choisir un texte pour le bouton radio";
    div.appendChild(text);
    rowCheckbox.appendChild(div);

    var boutonAjouter = document.createElement('a');
    boutonAjouter.className = "waves-effect waves-light btn-small blue darken-1";
    boutonAjouter.text = "+";
    boutonAjouter.id = "boutonAjouter";
    boutonAjouter.title="Ajouter un bouton radio";
    boutonAjouter.onclick = function() {
        nbRadio.int++;
        hidden.setAttribute("value",nbRadio.int);
        ajouterRadio(rowCheckbox,hidden,nbRadio,myid);
    }

    var div2= document.createElement("div");
    div2.className= "input-field col s12";

    var icone = document.createElement("i");
    icone.className= "material-icons prefix";
    icone.innerHTML="help";
    div2.appendChild(icone);

    var aide = document.createElement('INPUT');
    aide.setAttribute("type", "text");
    aide.setAttribute("name","question["+myid+"][aide]");
    aide.placeholder = "Donnez une indication (optionnel)";
    div2.appendChild(aide);

    var label2=document.createElement('label');
    label2.className= "input-field col s12";
    var checkbox2=document.createElement('input');
    checkbox2.setAttribute("type","checkbox");
    checkbox2.setAttribute("name","question["+myid+"][requis]");
    checkbox2.setAttribute("checked","checked");
    checkbox2.setAttribute("value","oui");
    checkbox2.className="filled-in";
    label2.appendChild(checkbox2);
    var span2=document.createElement("span");
    span2.innerHTML="Requis";
    label2.appendChild(span2);

    
    questionCheckbox.appendChild(question);
    questionCheckbox.appendChild(boutonRetirer);
    questionCheckbox.appendChild(rowCheckbox);
    questionCheckbox.appendChild(boutonAjouter);
    questionCheckbox.appendChild(div2);
    questionCheckbox.appendChild(label2);

    document.getElementById("form").appendChild(questionCheckbox);

}
function ajouterRadio(element,hidden,nbRadio,myid) {
    var divCheckbox = document.createElement('div');

    var rowCheckbox = document.createElement('div');

    var div= document.createElement("div");
    div.className= "col s12";

    var label=document.createElement('label');
    var checkbox=document.createElement('input');
    checkbox.setAttribute("type","radio");
    checkbox.setAttribute("name","radio"+myid);
    checkbox.className="filled-in";
    label.appendChild(checkbox);
    var span=document.createElement("span");
    span.innerHTML="";
    label.appendChild(span);
    div.appendChild(label);

    var text = document.createElement("input");
    text.setAttribute("type", "text");
    text.setAttribute("name","question["+myid+"][radio][]");
    text.placeholder = "Choisir un texte pour le bouton radio";
    text.setAttribute("required","true");
    div.appendChild(text);
    rowCheckbox.appendChild(div);


    var boutonRetirer = document.createElement('a');
    boutonRetirer.className = "waves-effect waves-light btn-small red darken-1 right";
    boutonRetirer.text = "x";
    boutonRetirer.id = "boutonRetirer";
    boutonRetirer.title= "Retirer la checkbox";
    boutonRetirer.onclick = function() {
        retirer(this);
        nbRadio.int--;
        hidden.setAttribute("value",nbRadio.int);
    }

    var balisep=document.createElement("p");
    balisep.innerHTML="<br>";

    divCheckbox.appendChild(rowCheckbox);
    divCheckbox.appendChild(boutonRetirer);

    element.appendChild(balisep);
    element.appendChild(divCheckbox);
}