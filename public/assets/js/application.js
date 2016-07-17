function createColis() {
  var name   = $("#colis-name").val();
  var desc   = $("#colis-desc").val();
  var weight = $("#colis-weight").val();
  $.post({
    url: "http://localhost:8000/api/colis/create",
    data: {
      "name": name,
      "description": desc,
      "weight": weight
    },
    success: function(res) {
      refreshColis();
    },
    error: function(res) {
      alert(res["responseJSON"]["message"]);
    }
  })
}


function refreshColis() {
  $.get({
    url: "http://localhost:8000/api/colis",
    success: function(res) {
      $("#colis_container").empty();
      console.log(res);
      for(var i in res) {
        var tr     = $("<tr></tr>");
        var id     = $("<td></td>");
        var name   = $("<td></td>");
        var desc   = $("<td></td>");
        var weight = $("<td></td>");
        var status = $("<td></td>");;
        id.text(res[i].id);
        name.text(res[i].name);
        desc.text(res[i].description);
        weight.text(res[i].weight);
        status.text("WIP");

        tr.append(id);
        tr.append(name);
        tr.append(desc);
        tr.append(weight);
        tr.append(status);
        $("#colis_container").append(tr);

      }
    }
  })
}
