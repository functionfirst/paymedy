# Paymedy Test

## Get Started

* `composer install`
* `npm install`
* `php artisan serve`

## Process 

1. Used Brew to install composer
2. Used composer to install laravel
3. Followed directions to install TALL stack 
4. Exported the Paymedy and icon’s out of the design as SVG’s and set them up as blade components
5. Mocked out the application level layout with the navigation to get the general page structure in place.
6. Started working through each of the “components” on the page. Abstracting them into new blade components to make life easier for me to implement repetitive UI elements. This paid off when implementing the case history container.
7. Ran a Lighthouse check on my local dev site just to check off any major issues with web vitals. There’s definitely some performance issues outstanding but these seem to mostly relate to hosting on local dev and lack of caching.

## Comments

1. As mobile/tablet designs haven’t been provided I have not applied any tablet or mobile specific classes to address issues with these viewports. We’d probably need a lot more art direction here to tackle issues with the main and sidebar navigation elements as well as figuring out how best to collapse the main content area down to single column.
2. I took a bit of artistic license with the Case Details area:
    1. Removed the underlines. I felt they were adding to the visual clutter of the area and were somewhat distracting. Good use of white-space here should be enough in my opinion.
    2. Used lowercase text for the form labels, this should reduce cognitive load and is slightly quicker and easier for users to read. 
    3. Moved labels below the value. The value carries more importance/relevancy so should theoretically sit higher in the visual hierarchy. If the user is unsure what the data represents, it takes a quick glance down to reconfirm what the value represents.
    4. Removed duplicate label/values for Product and Value
    5. Added a link to the customer name to link to their record. Applied the yellow colour from the Action Required button as that seemed the most appropriate accent colour that also provided good contrast ratio with the grey background.
3. I used a darker blue on the notification. The blue that was provided didn’t offer enough contrast for accessibility purposes which was being flagged in a web vitals check.
4. I thought there might be some value in having the “Defend this dispute” text be a button. It seemed that if you’re calling attention to it, you might as well offer the User the ability to “defend” here rather than require them to scroll to the actions bar further down the page.
5. Lighthouse reports some accessibility issues with contrast when using the Paymedy red as a background with white-text. Since this is a brand colour I didn’t make any changes to resolve this.
6. I wasn’t sure about the filters next to Merchant and Consumer. I think this would be simpler and easier for the user to have a single filter mechanism. Just thinking in a theoretical case where you might want to combine filters across both columns. Using two separate filter systems could require more time to add/remove filters.


With more time my next steps would be to work on the interactive elements such as filter system, dismissing alerts.
