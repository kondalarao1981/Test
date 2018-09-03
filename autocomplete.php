<html>
<head></head>
<body>
<form id="searchForm" action="http://google.com/cse">
  <input type="hidden" name="cx" value="CSE_USER:CSE_ID" />
  <input type="hidden" name="ie" value="UTF-8" />
  <input type="text" name="q" size="31" id="searchText" />

  <input type="submit" name="sa" value="Search" />
</form>
<img src="http://www.google.com/cse/images/google_custom_search_smwide.gif">

<script type="text/javascript" src="//www.google.com/jsapi"></script>
<script type="text/javascript">
google.load('search', '1');
var autoCompletionOptions = {
  'maxCompletions' : 3,
  'styleOptions' : {
    'xOffset' : 10
}};
google.setOnLoadCallback(function() {
  google.search.CustomSearchControl.attachAutoCompletionWithOptions(
    "CSE_USER:CSE_ID", document.getElementById('searchText'), 'searchForm',
    autoCompletionOptions);
});
</script>
</body>
</html>