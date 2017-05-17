// Data
var msg = {
	'permalink' : 'https://en.wikipedia.org/wiki/Bill_Murray',
	'title' : 'JS -- Bill Murray',
	'imageUrl' : 'http://www.fillmurray.com/300/150',
	'imageAlt' : 'Bill Murray placeholder image',
	'category' : 'Entertainment',
	'excerpt' : 'William James Murray (born September 21, 1950) is an American actor, comedian, and writer. He first gained exposure on Saturday Night Live, a role that earned him his first Emmy Award, and later starred in comedy films—including Meatballs (1979), Caddyshack (1980), Stripes (1981), Tootsie (1982), Ghostbusters (1984), Scrooged (1988), Ghostbusters II (1989), What About Bob? (1991), and Groundhog Day (1993). He also co-directed Quick Change (1990).',
};

// Get template from the DOM
var template = document.getElementById( 'js__template--greeting' ).innerHTML;

// Render the template with the data
var output = Mustache.render( template, msg );

// Stick it back in the DOM
document.getElementById( 'js__load-template' ).innerHTML = output;