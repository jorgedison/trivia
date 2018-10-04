<!--<style>
.map area:hover { border: 1px solid #d5d5d5; }
</style>

<img src="../RDdzJRHnBLCEdVSLXLrGQGpDR4VqvugXDfhZQLeH7rBPaktPjdyNesqcSztt/mvdMfMJ4nhXj5vh8pd8AgqPf3d2fgTZsRkHTm6AJGpvVd7bX7ffRjpM9Y3uX/3MPEjDHjxamuMKwkVa7mzWP3nuNDLwKKgJqxZzavGbDMGeC2JX5kQLST9Dn9d.png" usemap="#image-map">

<map name="image-map">
    <area target="" alt="" title="" href="" coords="284,1626,286,1686,428,1686,463,1749,519,1771,569,1771,613,1749,642,1719,655,1689,793,1687,797,1624,655,1623,616,1562,575,1542,530,1537,456,1566,428,1621" shape="poly">
    <area target="" alt="" title="" href="" coords="300,1432,82,1275" shape="rect">
    <area target="" alt="" title="" href="" coords="311,1274,528,1432" shape="rect">
    <area target="" alt="" title="" href="" coords="549,1272,765,1430" shape="rect">
    <area target="" alt="" title="" href="" coords="784,1272,998,1428" shape="rect">
    <area target="" alt="" title="" href="" coords="84,1106,299,1263" shape="rect">
    <area target="" alt="" title="" href="" coords="312,1106,526,1260" shape="rect">
    <area target="" alt="" title="" href="" coords="547,1104,763,1264" shape="rect">
    <area target="" alt="" title="" href="" coords="784,1106,998,1260" shape="rect">
    <area target="" alt="" title="" href="" coords="85,940,297,1091" shape="rect">
    <area target="" alt="" title="" href="" coords="313,941,526,1091" shape="rect">
    <area target="" alt="" title="" href="" coords="548,936,763,1093" shape="rect">
    <area target="" alt="" title="" href="" coords="784,939,1000,1092" shape="rect">
    <area target="" alt="" title="" href="" coords="83,772,298,923" shape="rect">
    <area target="" alt="" title="" href="" coords="313,774,526,924" shape="rect">
    <area target="" alt="" title="" href="" coords="549,773,762,922" shape="rect">
    <area target="" alt="" title="" href="" coords="784,771,999,925" shape="rect">
    <area target="" alt="" title="" href="" coords="420,590,655,757" shape="rect">
</map>-->


<img id="shapes" src="../RDdzJRHnBLCEdVSLXLrGQGpDR4VqvugXDfhZQLeH7rBPaktPjdyNesqcSztt/mvdMfMJ4nhXj5vh8pd8AgqPf3d2fgTZsRkHTm6AJGpvVd7bX7ffRjpM9Y3uX/3MPEjDHjxamuMKwkVa7mzWP3nuNDLwKKgJqxZzavGbDMGeC2JX5kQLST9Dn9d.png" usemap="#shapes_map" >

<map name="shapes_map">
    <area shape="rect" data-group="rectangle" alt="" coords="378,39,463,116" nohref >
    <area shape="poly" data-group="blue-circle" alt="" coords="286,34, 298,42, 308,54, 
        314,79, 307,103, 292,118, 270,125, 242,122, 227,112, 216,97, 212,73, 219,53, 227,43,
        240,34, 264,29" href="#">

    <!-- concentric circles for stroke highlighting -->
    <area shape="circle" data-group="inner-circle,inner-circle-mask" coords="101,81,36" href="#">
    <area shape="circle" data-group="outer-circle-mask" coords="148,81,12" nohref >
    <area shape="circle" data-group="outer-circle" coords="100,81,59" href="#">
    <!-- End circles -->
</map>

<script>
 $('#shapes').mapster({
        noHrefIsMask: false,
        fillColor: '0a7a0a',
        fillOpacity: 0.7,
        mapKey: 'data-group',
        strokeWidth: 2,
        stroke: true,
        strokeColor: 'F88017',
        render_select: {
            fillColor: 'adadad'
            },
        areas: [
		    {
			    key: 'blue-circle',
			    includeKeys: 'rectangle',
			    stroke: false
		    },
		    {
			    key: 'rectangle',
			    stroke: true,
			    strokeWidth: 3
		    },
		    {
			    key: 'outer-circle',
			    includeKeys: 'inner-circle-mask,outer-circle-mask',
			    stroke: true
		    },
		    {
			    key: 'outer-circle-mask',
			    isMask: true,
			    fillColorMask: 'ff002a'
		    },
		    {
			    key: 'inner-circle-mask',
			    fillColorMask: 'ffffff',
			    isMask: true
		    }
	    ]
    });

</script>
