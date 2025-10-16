// var currentUrl = window.location.href;
// console.log(currentUrl);
// $(document).ready(function(){
//     $('#authentication').on('click', function(e) {
//         var cla = $(this).attr('class');
//         authentication(cla);
//     });
// });

// function authentication(cla){
//     console.log((cla !== null ? cla : null));

//     var divAuthentication = $('<div class="divAuthenticationBack"></div>');
//         divAuthentication.append('<div class="divAuthentication"></div>');
        
//     $('body').prepend(divAuthentication);

//     $('.divAuthenticationBack').on('click', function(e) {
//         e.stopPropagation();
//         $(divAuthentication).remove();
//     });
//     $('.divAuthentication').on('click', function(e) {
//         e.stopPropagation();
//     });
//     $(document).keyup(function(e) {
//         if (e.key === "Escape") {
//             $(divAuthentication).remove();
//             $(document).off('keyup');
//         }
//     });
    
//     $('.divAuthentication').load("http://localhost/anilexs/views/connexion?page="+currentUrl + (cla != null ? '&type=2' : ''));
// }

  const input = document.getElementById('search');
const clearBtn = document.getElementById('btnx');

function toggleClearBtn() {
  if (input.value.trim() !== '') {
    clearBtn.style.display = 'inline-block';
  } else {
    clearBtn.style.display = 'none';
  }
  console.log(input.value.trim());
}

input.addEventListener('input', toggleClearBtn);

toggleClearBtn();

$(document).ready(function(){
    $('#btnx').on('click', function(e) {
        $('#search').val('');
        clearBtn.style.display = 'none';
    });
});