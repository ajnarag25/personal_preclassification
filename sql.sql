ALTER TABLE `form2_b` 


-- 1.1.1 Invention Patents

ADD COLUMN `ipsole_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `ipsole_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `ipsole_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `ipsole_name_4` VARCHAR(100) NOT NULL,

ADD COLUMN `ipsole_appdate_1` DATE NOT NULL,
ADD COLUMN `ipsole_appdate_2` DATE NOT NULL,
ADD COLUMN `ipsole_appdate_3` DATE NOT NULL,
ADD COLUMN `ipsole_appdate_4` DATE NOT NULL,

ADD COLUMN `ipsole_patapp_1` VARCHAR(100) NOT NULL,
ADD COLUMN `ipsole_patapp_2` VARCHAR(100) NOT NULL,
ADD COLUMN `ipsole_patapp_3` VARCHAR(100) NOT NULL,
ADD COLUMN `ipsole_patapp_4` VARCHAR(100) NOT NULL,

ADD COLUMN `ipsole_acceptdate_1` DATE NOT NULL,
ADD COLUMN `ipsole_acceptdate_2` DATE NOT NULL,
ADD COLUMN `ipsole_acceptdate_3` DATE NOT NULL,
ADD COLUMN `ipsole_acceptdate_4` DATE NOT NULL,


ADD COLUMN `ipmul_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `ipmul_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `ipmul_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `ipmul_name_4` VARCHAR(100) NOT NULL,


ADD COLUMN `ipmul_appdate_1` DATE NOT NULL,
ADD COLUMN `ipmul_appdate_2` DATE NOT NULL,
ADD COLUMN `ipmul_appdate_3` DATE NOT NULL,
ADD COLUMN `ipmul_appdate_4` DATE NOT NULL,


ADD COLUMN `ipmul_patapp_1` VARCHAR(100) NOT NULL,
ADD COLUMN `ipmul_patapp_2` VARCHAR(100) NOT NULL,
ADD COLUMN `ipmul_patapp_3` VARCHAR(100) NOT NULL,
ADD COLUMN `ipmul_patapp_4` VARCHAR(100) NOT NULL,

ADD COLUMN `ipmul_acceptdate_1` DATE NOT NULL,
ADD COLUMN `ipmul_acceptdate_2` DATE NOT NULL,
ADD COLUMN `ipmul_acceptdate_3` DATE NOT NULL,
ADD COLUMN `ipmul_acceptdate_4` DATE NOT NULL,

ADD COLUMN `ipmul_contrib_1` VARCHAR(100) NOT NULL,
ADD COLUMN `ipmul_contrib_2` VARCHAR(100) NOT NULL,
ADD COLUMN `ipmul_contrib_3` VARCHAR(100) NOT NULL,
ADD COLUMN `ipmul_contrib_4` VARCHAR(100) NOT NULL,



-- 1.1.2 Utility Models And Industrial Designs

ADD COLUMN `umidsole_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `umidsole_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `umidsole_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `umidsole_name_4` VARCHAR(100) NOT NULL,



ADD COLUMN `umidsole_appdate_1` DATE NOT NULL,
ADD COLUMN `umidsole_appdate_2` DATE NOT NULL,
ADD COLUMN `umidsole_appdate_3` DATE NOT NULL,
ADD COLUMN `umidsole_appdate_4` DATE NOT NULL,

ADD COLUMN `umidsole_patapp_1` VARCHAR(100) NOT NULL,
ADD COLUMN `umidsole_patapp_2` VARCHAR(100) NOT NULL,
ADD COLUMN `umidsole_patapp_3` VARCHAR(100) NOT NULL,
ADD COLUMN `umidsole_patapp_4` VARCHAR(100) NOT NULL,


ADD COLUMN `umidsole_acceptdate_1` DATE NOT NULL,
ADD COLUMN `umidsole_acceptdate_2` DATE NOT NULL,
ADD COLUMN `umidsole_acceptdate_3` DATE NOT NULL,
ADD COLUMN `umidsole_acceptdate_4` DATE NOT NULL,



ADD COLUMN `umidmul_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `umidmul_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `umidmul_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `umidmul_name_4` VARCHAR(100) NOT NULL,



ADD COLUMN `umidmul_appdate_1` DATE NOT NULL,
ADD COLUMN `umidmul_appdate_2` DATE NOT NULL,
ADD COLUMN `umidmul_appdate_3` DATE NOT NULL,
ADD COLUMN `umidmul_appdate_4` DATE NOT NULL,

ADD COLUMN `umidmul_patapp_1` VARCHAR(100) NOT NULL,
ADD COLUMN `umidmul_patapp_2` VARCHAR(100) NOT NULL,
ADD COLUMN `umidmul_patapp_3` VARCHAR(100) NOT NULL,
ADD COLUMN `umidmul_patapp_4` VARCHAR(100) NOT NULL,


ADD COLUMN `umidmul_acceptdate_1` DATE NOT NULL,
ADD COLUMN `umidmul_acceptdate_2` DATE NOT NULL,
ADD COLUMN `umidmul_acceptdate_3` DATE NOT NULL,
ADD COLUMN `umidmul_acceptdate_4` DATE NOT NULL,


ADD COLUMN `umidmul_contrib_1` VARCHAR(100) NOT NULL,
ADD COLUMN `umidmul_contrib_2` VARCHAR(100) NOT NULL,
ADD COLUMN `umidmul_contrib_3` VARCHAR(100) NOT NULL,
ADD COLUMN `umidmul_contrib_4` VARCHAR(100) NOT NULL,




-- 1.2 Commercialized Patented Products


ADD COLUMN `cpplocal_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `cpplocal_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `cpplocal_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `cpplocal_name_4` VARCHAR(100) NOT NULL,

ADD COLUMN `cpplocal_type_1` VARCHAR(100) NOT NULL,
ADD COLUMN `cpplocal_type_2` VARCHAR(100) NOT NULL,
ADD COLUMN `cpplocal_type_3` VARCHAR(100) NOT NULL,
ADD COLUMN `cpplocal_type_4` VARCHAR(100) NOT NULL,

ADD COLUMN `cpplocal_patentdate_1` DATE NOT NULL,
ADD COLUMN `cpplocal_patentdate_2` DATE NOT NULL,
ADD COLUMN `cpplocal_patentdate_3` DATE NOT NULL,
ADD COLUMN `cpplocal_patentdate_4` DATE NOT NULL,


ADD COLUMN `cpplocal_proddate_1` DATE NOT NULL,
ADD COLUMN `cpplocal_proddate_2` DATE NOT NULL,
ADD COLUMN `cpplocal_proddate_3` DATE NOT NULL,
ADD COLUMN `cpplocal_proddate_4` DATE NOT NULL,


ADD COLUMN `cpplocal_area_1` VARCHAR(100) NOT NULL,
ADD COLUMN `cpplocal_area_2` VARCHAR(100) NOT NULL,
ADD COLUMN `cpplocal_area_3` VARCHAR(100) NOT NULL,
ADD COLUMN `cpplocal_area_4` VARCHAR(100) NOT NULL,




ADD COLUMN `cppinter_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `cppinter_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `cppinter_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `cppinter_name_4` VARCHAR(100) NOT NULL,

ADD COLUMN `cppinter_type_1` VARCHAR(100) NOT NULL,
ADD COLUMN `cppinter_type_2` VARCHAR(100) NOT NULL,
ADD COLUMN `cppinter_type_3` VARCHAR(100) NOT NULL,
ADD COLUMN `cppinter_type_4` VARCHAR(100) NOT NULL,

ADD COLUMN `cppinter_patentdate_1` DATE NOT NULL,
ADD COLUMN `cppinter_patentdate_2` DATE NOT NULL,
ADD COLUMN `cppinter_patentdate_3` DATE NOT NULL,
ADD COLUMN `cppinter_patentdate_4` DATE NOT NULL,


ADD COLUMN `cppinter_proddate_1` DATE NOT NULL,
ADD COLUMN `cppinter_proddate_2` DATE NOT NULL,
ADD COLUMN `cppinter_proddate_3` DATE NOT NULL,
ADD COLUMN `cppinter_proddate_4` DATE NOT NULL,


ADD COLUMN `cppinter_area_1` VARCHAR(100) NOT NULL,
ADD COLUMN `cppinter_area_2` VARCHAR(100) NOT NULL,
ADD COLUMN `cppinter_area_3` VARCHAR(100) NOT NULL,
ADD COLUMN `cppinter_area_4` VARCHAR(100) NOT NULL,



-- 2.1.1 New Software Products (Computer Program)

ADD COLUMN `nspsole_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `nspsole_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `nspsole_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `nspsole_name_4` VARCHAR(100) NOT NULL,

ADD COLUMN `nspsole_copydate_1` DATE NOT NULL,
ADD COLUMN `nspsole_copydate_2` DATE NOT NULL,
ADD COLUMN `nspsole_copydate_3` DATE NOT NULL,
ADD COLUMN `nspsole_copydate_4` DATE NOT NULL,

ADD COLUMN `nspsole_utildate_1` DATE NOT NULL,
ADD COLUMN `nspsole_utildate_2` DATE NOT NULL,
ADD COLUMN `nspsole_utildate_3` DATE NOT NULL,
ADD COLUMN `nspsole_utildate_4` DATE NOT NULL,

ADD COLUMN `nspsole_endusername_1` VARCHAR(100) NOT NULL,
ADD COLUMN `nspsole_endusername_2` VARCHAR(100) NOT NULL,
ADD COLUMN `nspsole_endusername_3` VARCHAR(100) NOT NULL,
ADD COLUMN `nspsole_endusername_4` VARCHAR(100) NOT NULL,


ADD COLUMN `nspmul_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `nspmul_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `nspmul_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `nspmul_name_4` VARCHAR(100) NOT NULL,

ADD COLUMN `nspmul_copydate_1` DATE NOT NULL,
ADD COLUMN `nspmul_copydate_2` DATE NOT NULL,
ADD COLUMN `nspmul_copydate_3` DATE NOT NULL,
ADD COLUMN `nspmul_copydate_4` DATE NOT NULL,

ADD COLUMN `nspmul_utildate_1` DATE NOT NULL,
ADD COLUMN `nspmul_utildate_2` DATE NOT NULL,
ADD COLUMN `nspmul_utildate_3` DATE NOT NULL,
ADD COLUMN `nspmul_utildate_4` DATE NOT NULL,

ADD COLUMN `nspmul_endusername_1` VARCHAR(100) NOT NULL,
ADD COLUMN `nspmul_endusername_2` VARCHAR(100) NOT NULL,
ADD COLUMN `nspmul_endusername_3` VARCHAR(100) NOT NULL,
ADD COLUMN `nspmul_endusername_4` VARCHAR(100) NOT NULL,


ADD COLUMN `nspmul_contrib_1` VARCHAR(100) NOT NULL,
ADD COLUMN `nspmul_contrib_2` VARCHAR(100) NOT NULL,
ADD COLUMN `nspmul_contrib_3` VARCHAR(100) NOT NULL,
ADD COLUMN `nspmul_contrib_4` VARCHAR(100) NOT NULL



-- 2.1.2 Updated Software Products

ADD COLUMN `uspsole_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_name_4` VARCHAR(100) NOT NULL,


ADD COLUMN `uspsole_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_name_4` VARCHAR(100) NOT NULL,


ADD COLUMN `uspsole_copydate_1` DATE NOT NULL,
ADD COLUMN `uspsole_copydate_2` DATE NOT NULL,
ADD COLUMN `uspsole_copydate_3` DATE NOT NULL,
ADD COLUMN `uspsole_copydate_4` DATE NOT NULL,


ADD COLUMN `uspsole_utildate_1` DATE NOT NULL,
ADD COLUMN `uspsole_utildate_2` DATE NOT NULL,
ADD COLUMN `uspsole_utildate_3` DATE NOT NULL,
ADD COLUMN `uspsole_utildate_4` DATE NOT NULL,


ADD COLUMN `uspsole_contrib_1` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_contrib_2` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_contrib_3` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_contrib_4` VARCHAR(100) NOT NULL,

ADD COLUMN `uspsole_specfeat_1` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_specfeat_2` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_specfeat_3` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_specfeat_4` VARCHAR(100) NOT NULL,

ADD COLUMN `uspsole_endusername_1` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_endusername_2` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_endusername_3` VARCHAR(100) NOT NULL,
ADD COLUMN `uspsole_endusername_4` VARCHAR(100) NOT NULL,


-- 2.2 New Plant Variety 


ADD COLUMN `npvsole_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `npvsole_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `npvsole_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `npvsole_name_4` VARCHAR(100) NOT NULL,


ADD COLUMN `npvsole_type_1` VARCHAR(100) NOT NULL,
ADD COLUMN `npvsole_type_2` VARCHAR(100) NOT NULL,
ADD COLUMN `npvsole_type_3` VARCHAR(100) NOT NULL,
ADD COLUMN `npvsole_type_4` VARCHAR(100) NOT NULL,


ADD COLUMN `npvsole_datecom_1` DATE NOT NULL,
ADD COLUMN `npvsole_datecom_2` DATE NOT NULL,
ADD COLUMN `npvsole_datecom_3` DATE NOT NULL,
ADD COLUMN `npvsole_datecom_4` DATE NOT NULL,

ADD COLUMN `npvsole_datereg_1` DATE NOT NULL,
ADD COLUMN `npvsole_datereg_2` DATE NOT NULL,
ADD COLUMN `npvsole_datereg_3` DATE NOT NULL,
ADD COLUMN `npvsole_datereg_4` DATE NOT NULL,

ADD COLUMN `npvsole_dateprop_1` DATE NOT NULL,
ADD COLUMN `npvsole_dateprop_2` DATE NOT NULL,
ADD COLUMN `npvsole_dateprop_3` DATE NOT NULL,
ADD COLUMN `npvsole_dateprop_4` DATE NOT NULL,


ADD COLUMN `npvmul_name_1` VARCHAR(100) NOT NULL,
ADD COLUMN `npvmul_name_2` VARCHAR(100) NOT NULL,
ADD COLUMN `npvmul_name_3` VARCHAR(100) NOT NULL,
ADD COLUMN `npvmul_name_4` VARCHAR(100) NOT NULL,


ADD COLUMN `npvmul_type_1` VARCHAR(100) NOT NULL,
ADD COLUMN `npvmul_type_2` VARCHAR(100) NOT NULL,
ADD COLUMN `npvmul_type_3` VARCHAR(100) NOT NULL,
ADD COLUMN `npvmul_type_4` VARCHAR(100) NOT NULL,


ADD COLUMN `npvmul_datecom_1` DATE NOT NULL,
ADD COLUMN `npvmul_datecom_2` DATE NOT NULL,
ADD COLUMN `npvmul_datecom_3` DATE NOT NULL,
ADD COLUMN `npvmul_datecom_4` DATE NOT NULL,

ADD COLUMN `npvmul_datereg_1` DATE NOT NULL,
ADD COLUMN `npvmul_datereg_2` DATE NOT NULL,
ADD COLUMN `npvmul_datereg_3` DATE NOT NULL,
ADD COLUMN `npvmul_datereg_4` DATE NOT NULL,

ADD COLUMN `npvmul_dateprop_1` DATE NOT NULL,
ADD COLUMN `npvmul_dateprop_2` DATE NOT NULL,
ADD COLUMN `npvmul_dateprop_3` DATE NOT NULL,
ADD COLUMN `npvmul_dateprop_4` DATE NOT NULL,

ADD COLUMN `npvmul_contrib_1` VARCHAR(100) NOT NULL,
ADD COLUMN `npvmul_contrib_2` VARCHAR(100) NOT NULL,
ADD COLUMN `npvmul_contrib_3` VARCHAR(100) NOT NULL,
ADD COLUMN `npvmul_contrib_4` VARCHAR(100) NOT NULL,

;

