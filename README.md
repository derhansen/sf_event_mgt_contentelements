# Event management and registration - Content Elements

This TYPO3 extension extends [sf_event_mgt](https://github.com/derhansen/sf_event_mgt) to support content element
relations in event records. When installed, it is possible to assign various content elements to event records as 
shown on the screenshot below.

![Content element relation](/Documentation/Images/content-element-relation.png)


## Installation

* Install the extension either via composer (recommended) or the TYPO3 Extension Manager
* Include the static TypoScript "Event management and registration - Content elements"
* Modify your templates as shown in the next section

## Required template changes

In every template, where related content elements of an event should be shown, it is required to 
use the `EventContentElements` ViewHelper. To do so, register the ViewHelpers of this extension in the
HTML element and use the ViewHelper to hand over the content element uids of the given event to
TypoScript content element rendering.

**Example:**

```
<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
  xmlns:ece="http://typo3.org/ns/Derhansen/SfEventMgtContentelements/ViewHelpers"
  data-namespace-typo3-fluid="true">
  
  <f:cObject typoscriptObjectPath="lib.tx_sfeventmgt.contentElementRendering">{ece:eventContentElements(event: event)}</f:cObject>
  
</html>
```

## Recommended settings

Since content elements related to an event will be shown in the list and the page module, it is highly recommended
to set "Contains Plugin" to "Events" for the folder(s) containing event records.

![Folder Settings](/Documentation/Images/folder-contains-events.png)

This setting will hide related content elements in the list and page module. 

## Thanks for sponsoring

Thanks a lot to [MENNEKES Elektrotechnik GmbH & Co. KG](https://www.MENNEKES.de) for sponsoring the initial development 
of this extension and for supporting open source software.
