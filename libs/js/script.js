/**
 * Created by Miss Mhv on 30/08/2017.
 */


$(document).ready(function(){
    $('.collapsible').collapsible({
        accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
});

function materializeSelects() {
    var label, parentEl;
    document.querySelectorAll('select').forEach(function(control) {
        parentEl = control.parentElement;
        control.classList.add('mdl-selectfield__select');
        if (parentEl.tagName !== 'DIV') {
            return;
        }
        parentEl.classList.add('mdl-selectfield', 'mdl-js-selectfield');
        label = parentEl.querySelector('label');
        if (label) {
            label.setAttribute('for', control.id || control.name)
            label.classList.add('mdl-selectfield__label');
        }
    });
}


function materializeControls() {
    materializeTextInputs();
    materializeSelects();
}

/* Fonction pour trier un tableau en cliquant sur une en-t�te de ligne th */
function sortTable(n,id_tableau) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById(id_tableau);
//    table = document.getElementById("table_liste_offre");
    switching = true;
    // Set the sorting direction to ascending:
    dir = "asc";
    /* Make a loop that will continue until
     no switching has been done: */
    while (switching) {
        // Start by saying: no switching is done:
        switching = false;
        rows = table.getElementsByTagName("TR");
        /* Loop through all table rows (except the
         first, which contains table headers): */
        for (i = 1; i < (rows.length - 1); i++) {
            // Start by saying there should be no switching:
            shouldSwitch = false;
            /* Get the two elements you want to compare,
             one from current row and one from the next: */
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            /* Check if the two rows should switch place,
             based on the direction, asc or desc: */
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    // If so, mark as a switch and break the loop:
                    shouldSwitch= true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    // If so, mark as a switch and break the loop:
                    shouldSwitch= true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            /* If a switch has been marked, make the switch
             and mark that a switch has been done: */
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            // Each time a switch is done, increase this count by 1:
            switchcount ++;
        } else {
            /* If no switching has been done AND the direction is "asc",
             set the direction to "desc" and run the while loop again. */
            if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }
}

/*Foncion pour la recherche dan sun tableau
* exemple tableau qui affiche la liste des candidatures
* exemple tableau qui affiche la liste des offres
* */
$(document).ready(function(){
    $(".rechercher").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".filtre_tableau tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

