<?php
$pageTitle = "ag-Grid Themes: The Material Design Datagrid Theme";
$pageDescription = "ag-Grid is a feature-rich datagrid available in Free or Enterprise versions. It comes with five themes out of the box, this page covers the Material Design Theme for your datagrid.";
$pageKeyboards = "ag-Grid Material Design Data Grid";
$pageGroup = "themes";
include '../documentation-main/documentation_header.php';
?>


    <h1>Material Design Theme</h1>

    <p class="lead">
        The New material theme is available from <strong>version 13.0</strong> onwards. 
        To comply with the <a href="https://material.io/guidelines/components/data-tables.html#">material design data table guidelines</a>, 
        the theme uses different spacing and icon set compared to the other themes. 
    </p>

    <p> The example below shows the grid with a rich set of features enabled.</p>

    <?= example('Material Theme', 'theme-material', 'generated', array( 'enterprise' => true, 'processVue' => true, 'extras' => array("roboto") )) ?>

    <p>
        To use the theme, add <code>ag-theme-material</code> CSS class to the DIV element on which the ag-Grid instance is instantiated.
    <p/>

    <p>The following is an example of using the theme (using AngularJS 1.x):</p>

<snippet>
&lt;div ag-grid="gridOptions" class="ag-theme-material"&gt;&lt;/div&gt;</snippet>

    <h2>Include the Roboto Font</h2>

    <p>The material design guidelines require the Roboto font to be used throughout the interface. The easiest way to include it in the document is by loading it from the Google CDN. 
Put the following code in the HEAD element of your document: </p>

<snippet>
&lt;link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"&gt;</snippet>


<h2>Change the Theme Primary / Secondary Colors through Scss</h2>

<p>
The material theme uses Scss internally, exposing several variables which control its appearance. 
The ones you are likely looking into changing are the primary and secondary colors. The default ones are 
<a href="https://material.io/guidelines/style/color.html#color-color-palette">indigo-500 and pink-A200 from the Google color palette</a>, which match the indigo-pink Angular Material theme.
</p>

<p>To change the application colors, set the variables values to your colors of choice, and include the Scss theme file after that.<p>

<snippet>
// Set the colors to blue and amber
$primary-color: #2196F3; // blue-500
$accent-color: #FFD740; // amber-A200

// Import the ag-Grid material theme
@import '~ag-grid-community/src/styles/ag-theme-material/sass/ag-theme-material';</snippet>

<p>You can examine the full list of the variables that can be changed in the <a href="https://github.com/ag-grid/ag-grid/blob/master/packages/ag-grid-community/src/styles/ag-theme-material/vars/_ag-theme-material-vars.scss">theme source file</a>.</p>

<p>
The recommended way to process your project's Scss files is through webpack, since it provides various loaders that optimize and reduce the final size of the bundle. 
A working example for Angular 2 based on angular-cli can be found in <a href="https://github.com/ag-grid/ag-grid-material/tree/master/angular-material">the ag-grid-material repository</a>.
</p>

<h2>Change the row height / header height / icon size </h2>

<p>
The material design guidelines specify the size of the icons, height of the headers and the rows. We recommend keeping them to the default values for "true" material look.
However, In case you wish to change the sizing, you should do that both in the grid configuration 
and by overriding the <code>$grid-size</code> and <code>$icon-size</code>.
A working example that showcases this using webpack can be found <a href="https://github.com/ag-grid/ag-grid-material/tree/master/custom-sizing">ag-grid-material GitHub repository</a>.
</p> 

<h2>Integrate with Other Material Component Libraries</h2>

<p>
You can customize the various UI bits of the grid by providing custom cell renderers or editor components. 
A working example that integrates Angular Material's input, checkbox, select and datepicker can be found in the <a href="https://github.com/ag-grid/ag-grid-material/tree/master/angular-material">ag-grid-material GitHub repository</a>.
</p> 

<?php include '../documentation-main/documentation_footer.php';?>
