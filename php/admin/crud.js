        function toggleAppearance() {
            var dataDiv = document.getElementById("data");
            document.getElementById("data-button").value;
            var elem = document.getElementById("data-button");
            if (dataDiv.style.visibility == "hidden") {
                dataDiv.style.visibility = "visible";
                elem.value = "Hide Users";

            } else {
                dataDiv.style.visibility = "hidden";
                elem.value = "Show Users";

            }

        }
