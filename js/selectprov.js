window.onload = function () {
    var JSON = {
        "COLUMNS":["ID", "Name"],
        "DATA": [ 
            ["1","Buenos Aires"],
            ["2", "Capital Federal"],
            ["3", "Catamarca"],
            ["4","Chaco"],
            ["5", "Chubut"],
            ["6", "Cordoba"],
            ["7","Corrientes"],
            ["8", "Entre Rios"],
            ["9", "Formosa"],
            ["10","Jujuy"],
            ["11", "La Pampa"],
            ["12", "La Rioja"],
            ["13", "Mendoza"],
            ["14", "Misiones"],
            ["15", "Neuquen"],
            ["16", "Rio Negro"],
            ["17", "Salta"],
            ["18", "San Juan"],
            ["19", "San Luis"],
            ["20", "Santa Cruz"],
            ["21", "Santa Fe"],
            ["22", "Santiago del Estero"],
            ["23", "Tierra del Fuego"],
            ["24", "Tucuman"],
      

        ]
    }, select = document.getElementById("selector");
    for (var i = 0; i < JSON.DATA.length; i++) {
    var at = JSON.DATA[i], id = at[0], name = at[1];
        var option = document.createElement("option");
        option.value = id;
        option.textContent = name;
        select.appendChild(option);
    };
};