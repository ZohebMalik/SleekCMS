        setInterval(function() {
            var b = document.querySelector("#client");
            var count = b.textContent * 1 - 1;
            b.textContent = count;
            if (count <= 0) {
                window.location.replace("/client");
            }
        }, 1000);
		
		        setInterval(function() {
            var b = document.querySelector("#logout");
            var count = b.textContent * 1 - 1;
            b.textContent = count;
            if (count <= 0) {
                window.location.replace("/index");
            }
        }, 1000);
		
		        setInterval(function() {
            var b = document.querySelector("#banned");
            var count = b.textContent * 1 - 1;
            b.textContent = count;
            if (count <= 0) {
                window.location.replace("/index");
            }
        }, 1000);
		
		
		