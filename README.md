# Ripcord

Ripcord is a lightweight and user-friendly Composer package designed to streamline the creation of [chart.js](https://www.chartjs.org/) components in PHP, facilitating seamless integration with frontend JavaScript applications.

## Installation

You can install the package via composer:

```bash
composer require rileygrotenhuis/ripcord
```

## Usage

To create a new chart, simple use the `ChartBuilder` class and call the static method that corresponds to the type of chart you want to create.

```php
use Rileygrotenhuis\Ripcord\ChartBuilder;

$labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];

$data = [
    [
        'label' => 'My First Dataset',
        'data' => [65, 59, 80, 81, 56, 55, 40],
    ],
    [
        'label' => 'My Second Dataset',
        'data' => [28, 48, 40, 19, 86, 27, 90],
    ],
];

$chart = ChartBuilder::barChart($labels, $data);
```

You can check whether the chart has been created successfully by calling the `isValid` method.

```php
return $chart->validate();
```

You can use the `build` method to generate the chart object that will be used to render the chart in your frontend application.

```php
return $chart->build();
```

Here is an example of the JSON object that will be returned by the `render` method.

```json
{
  "labels": ["January", "February", "March", "April", "May", "June", "July"],
  "datasets": [
    {
      "label": "My First Dataset",
      "data": [65, 59, 80, 81, 56, 55, 40]
    },
    {
      "label": "My Second Dataset",
      "data": [28, 48, 40, 19, 86, 27, 90]
    }
  ]
}
```

## Chart Types

Ripcord currently supports the following chart types:

- Bar
- Line
- Pie
- Scatter
- Bubble
- Polar Area

## License

[MIT License](LICENSE.txt)
