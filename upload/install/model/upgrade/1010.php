<?php
class ModelUpgrade1009 extends Model {
	public function upgrade() {
		// Add missing core events
		$events = array();
		
		$events[] = array(
			'code'    => 'activity_customer_add', 
			'trigger' => 'catalog/model/account/customer/addCustomer/after', 
			'action'  => 'event/activity/addCustomer'
		);
			
		$events[] = array(
			'code'    => 'activity_customer_edit', 
			'trigger' => 'catalog/model/account/customer/editCustomer/after', 
			'action'  => 'event/activity/editCustomer'
		);
		
		$events[] = array(
			'code'    => 'activity_customer_password', 
			'trigger' => 'catalog/model/account/customer/editPassword/after', 
			'action'  => 'event/activity/editPassword'
		);
		
		$events[] = array(
			'code'    => 'activity_customer_forgotten', 
			'trigger' => 'catalog/model/account/customer/editCode/after', 
			'action'  => 'event/activity/forgotten'
		);
		
		$events[] = array(
			'code'    => 'activity_transaction', 
			'trigger' => 'catalog/model/account/customer/addTransaction/after', 
			'action'  => 'event/activity/addTransaction'
		);
		
		$events[] = array(
			'code'    => 'activity_customer_login', 
			'trigger' => 'catalog/model/account/customer/deleteLoginAttempts/after', 
			'action'  => 'event/activity/login'
		);
		
		$events[] = array(
			'code'    => 'activity_address_add', 
			'trigger' => 'catalog/model/account/address/addAddress/after', 
			'action'  => 'event/activity/addAddress'
		);
		
		$events[] = array(
			'code'    => 'activity_address_edit', 
			'trigger' => 'catalog/model/account/address/editAddress/after', 
			'action'  => 'event/activity/editAddress'
		);
		
		$events[] = array(
			'code'    => 'activity_address_delete', 
			'trigger' => 'catalog/model/account/address/deleteAddress/after', 
			'action'  => 'event/activity/deleteAddress'
		);
		
		$events[] = array(
			'code'    => 'activity_affiliate_add', 
			'trigger' => 'catalog/model/account/customer/addAffiliate/after', 
			'action'  => 'event/activity/addAffiliate'
		);
		
		$events[] = array(
			'code'    => 'activity_affiliate_edit', 
			'trigger' => 'catalog/model/account/customer/editAffiliate/after', 
			'action'  => 'event/activity/editAffiliate'
		);
		
		$events[] = array(
			'code'    => 'activity_order_add', 
			'trigger' => 'catalog/model/checkout/order/addOrderHistory/before', 
			'action'  => 'event/activity/addOrderHistory'
		);
		
		$events[] = array(
			'code'    => 'activity_return_add', 
			'trigger' => 'catalog/model/account/return/addReturn/after', 
			'action'  => 'event/activity/addReturn'
		);
		
		$events[] = array(
			'code'    => 'mail_transaction',
			'trigger' => 'catalog/model/account/customer/addTransaction/after', 
			'action'  => 'mail/transaction'
		);
		
		$events[] = array(
			'code'    => 'mail_forgotten', 
			'trigger' => 'catalog/model/account/customer/editCode/after', 
			'action'  => 'mail/forgotten'
		);
		
		$events[] = array(
			'code'    => 'mail_customer_add', 
			'trigger' => 'catalog/model/account/customer/addCustomer/after',
			'action'  => 'mail/register'
		);
		
		$events[] = array(
			'code'    => 'mail_customer_alert', 
			'trigger' => 'catalog/model/account/customer/addCustomer/after',
			'action'  => 'mail/register/alert'
		);
		
		$events[] = array(
			'code'    => 'mail_affiliate_add', 
			'trigger' => 'catalog/model/account/customer/addAffiliate/after', 
			'action'  => 'mail/affiliate'
		);
		
		$events[] = array(
			'code'    => 'mail_affiliate_alert', 
			'trigger' => 'catalog/model/account/customer/addAffiliate/after', 
			'action'  => 'mail/affiliate/alert'
		);
			
		$events[] = array(
			'code'    => 'mail_voucher', 
			'trigger' => 'catalog/model/checkout/order/addOrderHistory/after', 
			'action'  => 'extension/total/voucher/send'
		);
			
		$events[] = array(
			'code'    => 'mail_order_add', 
			'trigger' => 'catalog/model/checkout/order/addOrderHistory/before', 
			'action'  => 'mail/order'
		);
			
		$events[] = array(
			'code'    => 'mail_order_alert', 
			'trigger' => 'catalog/model/checkout/order/addOrderHistory/before', 
			'action'  => 'mail/order/alert'
		);
			
		$events[] = array(
			'code'    => 'statistics_review_add', 
			'trigger' => 'catalog/model/catalog/review/addReview/after', 
			'action'  => 'event/statistics/addReview'
		);
		
		$events[] = array(
			'code'    => 'statistics_return_add', 
			'trigger' => 'catalog/model/account/return/addReturn/after',
			'action'  => 'event/statistics/addReturn'
		);
		
		$events[] = array(
			'code'    => 'statistics_order_history', 
			'trigger' => 'catalog/model/checkout/order/addOrderHistory/after', 
			'action'  => 'event/statistics/addOrderHistory'
		);
		
		$events[] = array(
			'code'    => 'admin_mail_affiliate_approve', 
			'trigger' => 'admin/model/customer/customer_approval/approveAffiliate/after', 
			'action'  => 'mail/affiliate/approve'
		);
		
		$events[] = array(
			'code'    => 'admin_mail_affiliate_deny', 
			'trigger' => 'admin/model/customer/customer_approval/denyAffiliate/after', 
			'action'  => 'mail/affiliate/deny'
		);
		
		$events[] = array(
			'code'    => 'admin_mail_customer_approve', 
			'trigger' => 'admin/model/customer/customer_approval/approveCustomer/after', 
			'action'  => 'mail/customer/approve'
		);
		
		$events[] = array(
			'code'    => 'admin_mail_customer_deny', 
			'trigger' => 'admin/model/customer/customer_approval/denyCustomer/after', 
			'action'  => 'mail/customer/deny'
		);
		
		$events[] = array(
			'code'    => 'admin_mail_reward', 
			'trigger' => 'admin/model/customer/customer/addReward/after', 
			'action'  => 'mail/reward'
		);
		
		$events[] = array(
			'code'    => 'admin_mail_transaction', 
			'trigger' => 'admin/model/customer/customer/addTransaction/after', 
			'action'  => 'mail/transaction'
		);
		
		$events[] = array(
			'code'    => 'admin_mail_return', 
			'trigger' => 'admin/model/sale/return/addReturn/after', 
			'action'  => 'mail/return'
		);
		
		$events[] = array(
			'code'    => 'admin_mail_forgotten', 
			'trigger' => 'admin/model/user/user/editCode/after', 
			'action'  => 'mail/forgotten'
		);
		
		foreach ($events as $event) {
			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "event` WHERE `code` = '" . $this->db->escape($event['code']) . "'");
			
			if (!$query->num_rows) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = '" . $this->db->escape($event['code']) . "', `trigger` = '" . $this->db->escape($event['trigger']) . "', `action` = '" . $this->db->escape($event['action']) . "', `status` = '1', `sort_order` = '0'");
			}
		}
	}
}