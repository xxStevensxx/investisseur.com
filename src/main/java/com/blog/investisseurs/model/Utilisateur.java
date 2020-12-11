package com.blog.investisseurs.model;

import java.sql.Date;

public class Utilisateur {
	
	private long utilisateurId;
	private String pseudo;
	private String nom;
	private String prenom;
	private Date age;
	private String civilite;
	private String encryptedpassword;
	private int numero;
	private String email;
	
	
	
	public Utilisateur(long utilisateurId, String pseudo, String nom, String  prenom,
						Date age, String civilite, String encryptedPassword,int numero, String email) {
		
		this.utilisateurId = utilisateurId;
		this.pseudo = pseudo;
		this.nom = nom;
		this.prenom = prenom;
		this.age = age;
		this.civilite = civilite;
		this.encryptedpassword = encryptedPassword;
		this.numero = numero;
		this.email = email;
		
	}



	public long getUtilisateurId() {
		return utilisateurId;
	}



	public void setUtilisateurId(long utilisateurId) {
		this.utilisateurId = utilisateurId;
	}



	public String getPseudo() {
		return pseudo;
	}



	public void setPseudo(String pseudo) {
		this.pseudo = pseudo;
	}



	public String getNom() {
		return nom;
	}



	public void setNom(String nom) {
		this.nom = nom;
	}



	public String getPrenom() {
		return prenom;
	}



	public void setPrenom(String prenom) {
		this.prenom = prenom;
	}



	public Date getAge() {
		return age;
	}



	public void setAge(Date age) {
		this.age = age;
	}



	public String getCivilite() {
		return civilite;
	}



	public void setCivilite(String civilite) {
		this.civilite = civilite;
	}



	public String getEncryptedpassword() {
		return encryptedpassword;
	}



	public void setEncryptedpassword(String encryptedpassword) {
		this.encryptedpassword = encryptedpassword;
	}



	public int getNumero() {
		return numero;
	}



	public void setNumero(int numero) {
		this.numero = numero;
	}



	public String getEmail() {
		return email;
	}



	public void setEmail(String email) {
		this.email = email;
	}
	
	

}
