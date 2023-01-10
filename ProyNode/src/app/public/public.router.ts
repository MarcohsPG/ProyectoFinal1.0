import { Router } from 'express';
import { validateSession } from '../account/account.router';

// Export module for registering router in express app
export const router: Router = Router();

router.get("/", (req, res) => {
	res.render("index");
});
router.get("/home", (req, res) => {
	res.render("home");
});
router.get("/registro", (req, res) => {
	res.render("registro");
});
router.get("/sesion", (req, res) => {
	if (validateSession(req)) {
		res.redirect("account/home")
	} else {
		res.render("sesion");
	}
});
router.get("/tutorial", (req, res) => {
	res.render("tutorial");
});
router.get("/formulario", (req, res) => {
	res.render("formulario");
});