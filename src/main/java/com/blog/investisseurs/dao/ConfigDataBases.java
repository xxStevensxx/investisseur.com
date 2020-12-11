package com.blog.investisseurs.dao;

import javax.sql.DataSource;

import org.springframework.boot.jdbc.DataSourceBuilder;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

@Configuration
public class ConfigDataBases {
	
	  @Bean
	   public DataSource datasource() {
	      return DataSourceBuilder.create()
	        .driverClassName("com.mysql.cj.jdbc.Driver")
	        .url("jdbc:mysql://localhost:3306/investisseur")
	        .username("root")
	        .password("")
	        .build();	
	    }
}
