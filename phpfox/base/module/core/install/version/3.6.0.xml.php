<upgrade>
	<phpfox_update_settings>
		<setting>
			<group>server_settings</group>
			<module_id>core</module_id>
			<is_hidden>1</is_hidden>
			<type>boolean</type>
			<var_name>include_master_files</var_name>
			<phrase_var_name>setting_include_master_files</phrase_var_name>
			<ordering>15</ordering>
			<version_id>3.6.0rc1</version_id>
			<value>0</value>
		</setting>
	</phpfox_update_settings>
	<phpfox_update_phrases>
		<phrase>
			<module_id>core</module_id>
			<version_id>3.6.0rc1</version_id>
			<var_name>setting_force_secure_site</var_name>
			<added>1371733146</added>
			<value><![CDATA[<title>Force HTTPS for Logged In Users</title><info>Enable to make all connections secure when a user is logged in. <b>Notice:</b> Your server must have HTTPS support.</info>]]></value>
		</phrase>
		<phrase>
			<module_id>core</module_id>
			<version_id>3.6.0rc1</version_id>
			<var_name>setting_auth_user_via_session</var_name>
			<added>1371733504</added>
			<value><![CDATA[<title>Authenticate Users via Database Session Log</title><info>If you enable this option we will authenticate users via a database session log.</info>]]></value>
		</phrase>
	</phpfox_update_phrases>
	<hooks>
		<hook>
			<module_id>core</module_id>
			<hook_type>library</hook_type>
			<module>core</module>
			<call_name>mail_send_call_2</call_name>
			<added>1372757268</added>
			<version_id>3.6.0rc1</version_id>
			<value />
		</hook>
		<hook>
			<module_id>core</module_id>
			<hook_type>library</hook_type>
			<module>core</module>
			<call_name>mail_send_call_3</call_name>
			<added>1372757268</added>
			<version_id>3.6.0rc1</version_id>
			<value />
		</hook>
	</hooks>
</upgrade>