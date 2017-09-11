(function($) {
	WPGMZA.Polygon = function(row, enginePolygon)
	{
		var self = this;
		
		WPGMZA.assertInstanceOf(this, "Polygon");
		
		this.paths = null;
		this.title = null;
		this.name = null;
		this.link = null;
		
		WPGMZA.MapObject.apply(this, arguments);
	}
	
	WPGMZA.Polygon.prototype = Object.create(WPGMZA.MapObject.prototype);
	WPGMZA.Polygon.prototype.constructor = WPGMZA.Polygon;
	
	WPGMZA.Polygon.getConstructor = function()
	{
		switch(WPGMZA.settings.engine)
		{
			case "google-maps":
				if(WPGMZA.isProVersion())
					return WPGMZA.GoogleProPolygon;
				return WPGMZA.GooglePolygon;
				break;
				
			default:
				if(WPGMZA.isProVersion())
					return WPGMZA.OSMProPolygon;
				return WPGMZA.OSMPolygon;
				break;
		}
	}
	
	WPGMZA.Polygon.createInstance = function(row)
	{
		var constructor = WPGMZA.Polygon.getConstructor();
		return new constructor(row);
	}
	
	WPGMZA.Polygon.prototype.toJSON = function()
	{
		var result = {
			id: 		this.id,
			name:		this.name,
			title:		this.title,
			link:		this.link,
			settings: 	this.settings
		};
		
		return result;
	}
	
})(jQuery);