# Transcom Business Intelligence

An in house Business Intelligence tools.

## Installation
### Step 1  
Run
  ```bash
 php artisan serve
 ``` 



## Data Format
### For Bar Chart and Line Chart

We've used reusable custom chart components. The components require chartData as props.

```javascript
<LineChart :chartData="LineChartData" />
```

The data format is as below

```javascript
chartData: {
        labels: [
          "Item 1",
          "Item 2",
          "Item 3",
          
        ],
        datasets: [
          {
            label: 'Title of the Chart',
            backgroundColor: '#F2506E',
            data: [item 1 value, item 2 value, item 3 value,]
          }
        ]
      },
```
### For Pie Chart and Doughnut Chart
```javascript
chartData: {
        label: 'Title for the chart',
        labels: ['item 1', 'item 2 ', 'item 3', ],
        datasets: [
          {
            backgroundColor: ['item 1 color',  'item 2 color', 'item 3 color'],
            data: [item 1 value,  item 2 value, item 3 value,]
          }
        ]
      },
```



