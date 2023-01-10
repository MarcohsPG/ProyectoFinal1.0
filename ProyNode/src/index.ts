import app from "./server";
import config from "../config.json";
import DB from "./database/db";
import accountDAO from "./database/account.dao";
import denunciaDAO from "./database/denuncia.dao";

// Start the application by listening to specific port
const port = Number(process.env.PORT || config.PORT || 8080);
const db = new DB();

app.post("/usuario/registrar.do", async (req, res) => {
    let result = await accountDAO.createUsuario(
        req.body.nombres,
        req.body.apellidos,
        req.body.telefono,
        req.body.email,
        req.body.pass
    );
    res.json(result);
});

app.post("/denuncia.do", async (req, res) => {
    try {
        if (req.body.nombre == "" || req.body.apellido1 == "" || req.body.apellido2 == "") {
            res.json({
                error: true,
                msg: "Por favor complete los campos"
            })
        } else {
            let details = {
                nombre: req.body.nombre,
                apellido1: req.body.apellido1,
                apellido2: req.body.apellido2,
                parentesco: req.body.parentesco,
                celular: req.body.celular,
                telefono: req.body.telefono,
                correo: req.body.correo,
                tipo: req.body.tipo,
                nombrevictima: req.body.nombrevictima,
                apellido1vic: req.body.apellido1vic,
                apellido2vic: req.body.apellido2vic,
                nacimiento: req.body.nacimiento,
                sexo: req.body.sexo,
                nacionalidad: req.body.nacionalidad,
                curp: req.body.curp,
                lugarnaci: req.body.lugarnaci,
                estadocivil: req.body.estadocivil,
                calle: req.body.calle,
                numeroext: req.body.numeroext,
                numeroint: req.body.numeroint,
                cp: req.body.cp,
                colonia: req.body.colonia,
                alcaldia: req.body.alcaldia,
                entidad: req.body.entidad,
                telefonovic: req.body.telefonovic,
                nombrevictima2: req.body.nombrevictima2,
                relacion: req.body.relacion,
                callehechos: req.body.callehechos,
                numeroexthechos: req.body.numeroexthechos,
                numerointhechos: req.body.numerointhechos,
                cphechos: req.body.cphechos,
                coloniahechos: req.body.coloniahechos,
                alcaldiahechos: req.body.alcaldiahechos,
                entidadhechos: req.body.entidadhechos,
                fechahechos: req.body.fechahechos,
                complemento: req.body.complemento,
                hechos: req.body.hechos,
                tutor: req.body.tutor,
                adulto: req.body.adulto,
                indigente: req.body.indigente,
                discapacidad: req.body.discapacidad,
                migrante: req.body.migrante,
                indigena: req.body.indigena,
                refugiado: req.body.refugiado,
                defensora: req.body.defensora,
                periodista: req.body.periodista,
                dezplazado: req.body.dezplazado,
                causa: req.body.causa,
                mujer: req.body.mujer
            };
            await denunciaDAO.addDenuncia(details);
            res.json({
                error: false,
                msg: "Denuncia registrada con éxito!"
            });
        }
    } catch (exception) {
        res.json({
            error: true,
            msg: "Ups hay ocurrido un error!"
        })
        console.log(exception);
    }

})

app.post("/login.do", async (req, res) => {
    let login = await accountDAO.validateLogin(req.body.email, req.body.telefono, req.body.pass);

    if (login) {
        console.log(req.session);
        req.session.telefono = req.body.telefono;
        res.redirect("/account/home");
    } else {
        req.session.telefono = -1;
        res.redirect("/sesion");
    }
});

app.get("/logout.do", async (req, res) => {
    req.session.telefono = undefined;
    res.redirect("/");
})

app.listen(port, () => {
    console.info("Express application started on port: " + port);
});
