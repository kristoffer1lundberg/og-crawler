# ogCrawler

Fetches some basic OpenGraph data from a URL and makes it accessible from a Twig variable.

## Requirements

This plugin requires Craft CMS 3.0.0 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require kristoffer1lundberg/ogcrawler

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for ogCrawler.

## Usage

```twig
{# Check OpenGraph data from a URL #}
{# If unsuccessful, your variable will return false #}
{% set ogData = craft.ogCrawler.getUrl('http://www.imdb.com/title/tt0056732/') %}

{% if ogData %}
	Print some data here, for example:
	{% if ogData.image is defined %}
		<img src="{{ ogData.image }}" alt="">
	{% endif %}
{% endif %}
```

## Available properties

```description```

```image```

```site_name```

```title```

```type```

## Credit

Based on the [OpenGraph Protocol Helper](https://github.com/scottmac/opengraph) by Scott MacVicar