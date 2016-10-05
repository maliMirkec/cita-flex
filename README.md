# cita-flex
Flexbox grid for modern layout.

## Installation

`bower install cita-flex`

## Usage

1. Include just mixins and create grid using css

```
@import './path-to-bower-folder/cita-flex/css/src/_cita-flex-mixins.scss';

.row {
    @include flex;
    @include wrap(wrap);
}

.column-6 {
    @include flexbox(1 1 auto);
    @include flex-basis(6);
}
```


2. include classes and append them in `HTML`

```
<div class="flex-container">
    <div class="flex-box--6">...</div>
    <div class="flex-box--6">...</div>
</div>
```
## All available classes

Every class is pretty much self explanatory.

```
.flex-container
.flex-container--half-page
.flex-container--full-page
.flex-container--row
.flex-container--row-reverse
.flex-container--column
.flex-container--column-reverse
.flex-container--wrap
.flex-container--fill
.flex-container--1
.flex-container--2
.flex-container--3
.flex-container--4
.flex-container--5
.flex-container--6
.flex-container--7
.flex-container--8
.flex-container--9
.flex-container--10
.flex-container--11
.flex-container--12
.flex-center
.flex-box
.flex-box--no-grow
.flex-box--align-self
.flex-box--1
.flex-box--2
.flex-box--3
.flex-box--4
.flex-box--5
.flex-box--6
.flex-box--7
.flex-box--8
.flex-box--9
.flex-box--10
.flex-box--11
.flex-box--12
.flex-justify--start
.flex-justify--end
.flex-justify--center
.flex-justify--space-between
.flex-justify--space-around
.flex-item--start
.flex-item--end
.flex-item--center
.flex-item--stretch
.flex-item--baseline
.flex-content--start
.flex-content--end
.flex-content--center
.flex-content--stretch
.flex-content--space-between
.flex-content--space-around
.flex-box
.margin-top-auto
.margin-right-auto
.margin-bottom-auto
.margin-left-auto
.margin-auto-x
.margin-auto-y
.margin-auto
```
