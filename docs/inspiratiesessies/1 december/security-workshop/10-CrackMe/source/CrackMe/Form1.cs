using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CrackMe
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (textBox1.Text == "GJHDU-TXJSL-PWOQS-XBCNX")
            {
                textBox1.Enabled = false;
                button1.Enabled = false;
                MessageBox.Show("Netjes! Je hebt de activatie code weten te achterhalen. Maak een MD5 hash van de code, en vul dat als antwoord in.", "CrackMe");
                 
            } else if(textBox1.Text == "baas") {
                MessageBox.Show("Tamer is een baas!", "CrackMe");
            } else
            {
                MessageBox.Show("De licentie code klopt niet...", "CrackMe");
            }
        }
    }
}
