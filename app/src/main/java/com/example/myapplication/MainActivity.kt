package com.example.myapplication

import android.os.Bundle
import android.widget.Button
import android.widget.CheckBox
import android.widget.TextView
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat

class MainActivity : AppCompatActivity() {

    private lateinit var cbTrocaDeOleo: CheckBox
    private lateinit var cbPneus: CheckBox
    private lateinit var cbFarois: CheckBox
    private lateinit var cbLogoAudiNormal: CheckBox
    private lateinit var cbCapaVolante: CheckBox
    private lateinit var cbLogoAudiPreto: CheckBox
    private lateinit var btnEnviar: Button

    private lateinit var Total: TextView

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_main)
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main)) { v, insets ->
            val systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars())
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom)
            insets
    }
        cbTrocaDeOleo = findViewById(R.id.cbTrocaDeOleo)
        cbPneus = findViewById(R.id.cbPneus)
        cbFarois= findViewById(R.id.cbFarois)
        cbLogoAudiNormal = findViewById(R.id.cbLogoAudiNormal)
        cbCapaVolante = findViewById(R.id.cbCapaVolante)
        cbLogoAudiPreto = findViewById(R.id.cbLogoAudiPreto)
        btnEnviar = findViewById(R.id.btnEnviar)
        Total = findViewById(R.id.Total)


        btnEnviar.setOnClickListener {
           var somar = 0.0

            if (cbTrocaDeOleo.isChecked){
                somar += 1.500
            }
            if (cbPneus.isChecked){
                somar += 15.000

            }
            if(cbFarois.isChecked){
                somar += 7.800
            }
            if (cbLogoAudiNormal.isChecked){
                somar += 3.500

            }
            if (cbCapaVolante.isChecked){
                somar += 6.700


            }
            if (cbLogoAudiPreto.isChecked){

                somar += 9.000
            }
            Total.text = "Total: R$ %.3f".format(somar)


        }


        }

}