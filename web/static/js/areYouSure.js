let dangerous = document.getElementsByClassName('delete');

for(let i=0; i<dangerous.length; i++){
    dangerous[i].addEventListener('click', function(e){
        e.preventDefault()
        let target = this.href;
        swal({
          title: "Attention",
          text: "Êtes-vous sûr de vouloir "+this.innerHTML+" ? \n Cette action est irréversible...",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Poursuivre",
          closeOnConfirm: false
        },
        function(isConfirm){
            if (isConfirm)
                window.location = target;
            else
                swal("Annulé", "La suppression a été annulée", "error");
        });
    }, false);
}