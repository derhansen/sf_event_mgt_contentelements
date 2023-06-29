#
# Table structure for table 'tx_sfeventmgt_domain_model_event'
#
CREATE TABLE tx_sfeventmgt_domain_model_event (
	content_elements varchar(255) DEFAULT '' NOT NULL,
);

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
	tx_sfeventmgt_related_event int(11) DEFAULT '0' NOT NULL,
	KEY index_eventcontent (tx_sfeventmgt_related_event)
);