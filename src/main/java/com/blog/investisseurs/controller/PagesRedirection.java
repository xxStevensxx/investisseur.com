package com.blog.investisseurs.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class PagesRedirection {
	
	@GetMapping("/")
	public String HomePage() {
		return "index.html";
	}
	
	@GetMapping("/signIn.html")
	public String signIn() {
		return "views/signIn.html";
	}
	
	@GetMapping("/signUp.html")
	public String signUp() {
		return "views/signUp.html";
	}

}
