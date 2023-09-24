( function( api ) {

	// Extends our custom "web-developer" section.
	api.sectionConstructor['web-developer'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );