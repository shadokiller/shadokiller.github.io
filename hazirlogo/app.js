function logoYap(){
    var nickname = document.getElementById("input").value;
    if (nickname === ''){alert("Lütfen bir Nickname girin!")}
    selectElement = document.querySelector('#select1');
		secim = selectElement.options[selectElement.selectedIndex].value;
    switch (secim){
           case "logo1":
                var url = `https://dynamic.brandcrowd.com/asset/logo/1a2ebc7a-1b24-466a-bee7-9a0e8f5d8395/logo?v=4&text=${nickname}`;
                var img = document.getElementById("img");
                img.src = url;
                showSnackbar();
                break;
           case "logo2":
                var url = `https://dynamic.brandcrowd.com/asset/logo/7f0254b2-49ae-4819-9107-47728665a65f/logo?v=4&text=${nickname}`;
                var img = document.getElementById("img");
                img.src = url;
                showSnackbar();
                break;
           case "logo3":
                var url = `https://dynamic.brandcrowd.com/asset/logo/ce8f0d62-a81d-48d7-bc73-202028150a67/logo?v=4&text=${nickname}`;
                var img = document.getElementById("img");
                img.src = url;
                showSnackbar();
                break;
           case "logo4":
                var url = `https://dynamic.brandcrowd.com/asset/logo/ac00aec2-4912-4f8d-a017-ba2ad99b8568/logo?v=4&text=${nickname}`;
                var img = document.getElementById("img");
                img.src = url;
                showSnackbar();
                break;
           case "logoph":
                window.fetch(`https://open-apis-rest.up.railway.app/api/textpro?url=https://textpro.me/pornhub-style-logo-online-generator-free-977.html&text1=${nickname}&text2=hub`)
                .then((response) => {
                  return response.json();
                })
                .then((data) => {
                  var url = data.data
                  var img = document.getElementById("img");
                  img.style.height = "250px"
                  img.style.width = "250px"
                  img.src = url;
                  showSnackbar();
                });
                break;
           default:
                alert('Hiç bir logo tipini seçmediniz!');
                break;
       }
    function showSnackbar() {
      var snackBar =
      document.getElementById("snackbar")
      snackBar.className = "show-bar";
      setTimeout(function () {
      snackBar.className =
        snackBar.className.replace("show-bar", "");
      }, 5000);
    }
    
  }