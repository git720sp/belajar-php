$(document).ready(function(){
    
    $(".user-panel .image img, .user-panel .info a").click(function(){
        $("#popup").fadeIn();
    });

    
    $("#logoutButton").click(function(){
        
        if(confirm("Apakah Anda yakin ingin logout?")) {
            
            window.location.href = 'index.php';
        }
    });

    
    $("#closeButton").click(function(){
        $("#popup").fadeOut();
    });
});

function login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("Masukkan Email dan Password terlebih dahulu");
    } else {
        window.location.href = "dashboard.php"; 
    }
}
