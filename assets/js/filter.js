jQuery(document).ready(function() {
  var url = window.location.href;
  var params = parseURLParams(url);

  var level = params.levelFilter[0];
  var country = params.countryFilter[0];
  var art = params.artFilter[0];
  var science = params.scienceFilter[0];
  var institution = params.institutionFilter[0];

  jQuery('option[value="' + level + '"]').attr('selected', 'selected');
  jQuery('option[value="' + country + '"]').attr('selected', 'selected');
  jQuery('option[value="' + art + '"]').attr('selected', 'selected');
  jQuery('option[value="' + science + '"]').attr('selected', 'selected');
  jQuery('option[value="' + institution + '"]').attr('selected', 'selected');
});