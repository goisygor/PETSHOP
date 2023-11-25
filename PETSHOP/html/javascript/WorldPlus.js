  document.getElementById('toggleBoth').addEventListener('click', function () {
    var collapse1 = new bootstrap.Collapse(document.getElementById('multiCollapseExample1'));
    var collapse2 = new bootstrap.Collapse(document.getElementById('multiCollapseExample2'));

    collapse1.hide();
    collapse2.hide();
  });